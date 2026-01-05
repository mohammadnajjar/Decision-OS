/**
 * Decision OS - Pomodoro Timer
 * مؤقت بومودورو للتركيز والإنتاجية
 */

class PomodoroTimer {
    constructor(options = {}) {
        // Load settings from localStorage or use defaults
        const savedSettings = this.loadSettings();

        this.workDuration = savedSettings.workDuration || options.workDuration || 25 * 60; // 25 دقيقة
        this.breakDuration = savedSettings.breakDuration || options.breakDuration || 5 * 60; // 5 دقائق
        this.longBreakDuration = savedSettings.longBreakDuration || options.longBreakDuration || 15 * 60; // 15 دقيقة
        this.longBreakInterval = savedSettings.longBreakInterval || options.longBreakInterval || 4; // كل 4 جلسات
        this.soundEnabled = savedSettings.soundEnabled !== undefined ? savedSettings.soundEnabled : true;

        this.timeRemaining = this.workDuration;
        this.isRunning = false;
        this.isBreak = false;
        this.sessionsCompleted = 0;
        this.currentSessionId = null;
        this.intervalId = null;
        this.startTime = null;

        // DOM Elements - matching HTML IDs
        this.timerDisplay = document.getElementById('pomodoro-display');
        this.startBtn = document.getElementById('pomodoro-start');
        this.pauseBtn = document.getElementById('pomodoro-pause');
        this.resetBtn = document.getElementById('pomodoro-reset');
        this.skipBtn = document.getElementById('pomodoro-skip');
        this.statusLabel = document.getElementById('pomodoro-status');
        this.completedCount = document.getElementById('pomodoro-completed');
        this.focusMinutes = document.getElementById('pomodoro-focus-minutes');
        this.sessionNumber = document.getElementById('pomodoro-session-number');

        this.init();
    }

    init() {
        this.bindEvents();
        this.loadState(); // استعادة الحالة من localStorage
        this.updateDisplay();
        this.loadTodayStats();
        this.setupSettingsModal();
    }

    bindEvents() {
        if (this.startBtn) {
            this.startBtn.addEventListener('click', () => this.start());
        }
        if (this.pauseBtn) {
            this.pauseBtn.addEventListener('click', () => this.pause());
        }
        if (this.resetBtn) {
            this.resetBtn.addEventListener('click', () => this.reset());
        }
        if (this.skipBtn) {
            this.skipBtn.addEventListener('click', () => this.skip());
        }
    }

    async start() {
        if (this.isRunning) return;

        // إذا بداية جلسة جديدة (ليست استئناف)
        if (!this.isBreak && this.timeRemaining === this.workDuration) {
            await this.startSession();
            this.startTime = Date.now();
        } else if (!this.startTime) {
            this.startTime = Date.now() - ((this.isBreak ? this.getBreakDuration() : this.workDuration) - this.timeRemaining) * 1000;
        }

        this.isRunning = true;
        this.updateButtons();

        this.intervalId = setInterval(() => {
            this.timeRemaining--;
            this.updateDisplay();
            this.saveState(); // حفظ الحالة كل ثانية

            if (this.timeRemaining <= 0) {
                this.complete();
            }
        }, 1000);
    }

    pause() {
        if (!this.isRunning) return;

        this.isRunning = false;
        clearInterval(this.intervalId);
        this.updateButtons();
        this.saveState();
    }

    reset() {
        this.pause();
        this.timeRemaining = this.isBreak ? this.getBreakDuration() : this.workDuration;
        this.updateDisplay();
    }

    async skip() {
        this.pause();

        if (!this.isBreak) {
            // تخطي جلسة العمل = إكمالها
            const duration = this.startTime ? Math.floor((Date.now() - this.startTime) / 1000) : this.workDuration - this.timeRemaining;
            this.sessionsCompleted++;

            if (this.currentSessionId) {
                await this.completeSession(duration);
            }

            // الانتقال للاستراحة
            this.isBreak = true;
            this.timeRemaining = this.getBreakDuration();
        } else {
            // تخطي الاستراحة → انتقل للعمل
            this.isBreak = false;
            this.timeRemaining = this.workDuration;
        }

        // إعادة تعيين وقت البداية
        this.startTime = null;

        this.saveState();
        this.updateDisplay();
        this.updateButtons();
    }

    async interruptSession() {
        if (!this.currentSessionId) return;

        try {
            await fetch(`/decision-os/pomodoro/${this.currentSessionId}/interrupt`, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                }
            });

            this.currentSessionId = null;
        } catch (error) {
            console.error('Failed to interrupt session:', error);
        }
    }

    async complete() {
        clearInterval(this.intervalId);
        this.isRunning = false;

        if (!this.isBreak) {
            // انتهت جلسة العمل
            const duration = Math.floor((Date.now() - this.startTime) / 1000);
            this.sessionsCompleted++;
            await this.completeSession(duration);

            if (this.soundEnabled) {
                this.playNotificationSound();
            }
            this.showNotification('انتهت جلسة العمل!', 'حان وقت الاستراحة 🎉');

            // التحول للاستراحة
            this.isBreak = true;
            this.timeRemaining = this.getBreakDuration();
            this.startTime = null;
        } else {
            // انتهت الاستراحة
            if (this.soundEnabled) {
                this.playNotificationSound();
            }
            this.showNotification('انتهت الاستراحة!', 'حان وقت العمل 💪');

            // التحول للعمل
            this.isBreak = false;
            this.timeRemaining = this.workDuration;
            this.startTime = null;
        }

        this.saveState();
        this.updateDisplay();
        this.updateButtons();
    }

    getBreakDuration() {
        return (this.sessionsCompleted % this.longBreakInterval === 0)
            ? this.longBreakDuration
            : this.breakDuration;
    }

    async startSession() {
        try {
            const response = await fetch('/decision-os/pomodoro/start', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                },
                body: JSON.stringify({
                    duration: this.workDuration / 60
                })
            });

            if (response.ok) {
                const data = await response.json();
                this.currentSessionId = data.session?.id || data.session_id;
                console.log('Session started:', this.currentSessionId);
            }
        } catch (error) {
            console.error('Failed to start session:', error);
        }
    }

    async completeSession(duration) {
        if (!this.currentSessionId) {
            console.warn('No session ID to complete');
            return;
        }

        try {
            const response = await fetch(`/decision-os/pomodoro/${this.currentSessionId}/complete`, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                },
                body: JSON.stringify({
                    status: 'completed',
                    duration: duration || this.workDuration
                })
            });

            if (response.ok) {
                console.log('Session completed successfully');
            }

            this.currentSessionId = null;
            this.updateTodayStats();
        } catch (error) {
            console.error('Failed to complete session:', error);
        }
    }

    updateDisplay() {
        const minutes = Math.floor(this.timeRemaining / 60);
        const seconds = this.timeRemaining % 60;
        const display = `${minutes.toString().padStart(2, '0')}:${seconds.toString().padStart(2, '0')}`;

        if (this.timerDisplay) {
            this.timerDisplay.textContent = display;
        }

        if (this.statusLabel) {
            if (this.isRunning) {
                this.statusLabel.textContent = this.isBreak ? '🧘 استراحة' : '🎯 تركيز';
            } else {
                this.statusLabel.textContent = 'جاهز للبدء';
            }
        }

        // Update stats display
        if (this.completedCount) {
            this.completedCount.textContent = this.sessionsCompleted;
        }
        if (this.focusMinutes) {
            this.focusMinutes.textContent = this.sessionsCompleted * 25;
        }
        if (this.sessionNumber) {
            this.sessionNumber.textContent = this.sessionsCompleted + 1;
        }

        // Update page title
        document.title = `${display} - ${this.isBreak ? 'استراحة' : 'تركيز'} | Decision OS`;
    }

    updateButtons() {
        if (this.startBtn) {
            this.startBtn.classList.toggle('d-none', this.isRunning);
        }
        if (this.pauseBtn) {
            this.pauseBtn.classList.toggle('d-none', !this.isRunning);
        }
        if (this.resetBtn) {
            this.resetBtn.classList.toggle('d-none', !this.isRunning && this.timeRemaining === this.workDuration);
        }
        if (this.skipBtn) {
            this.skipBtn.classList.toggle('d-none', !this.isRunning);
        }
    }

    async loadTodayStats() {
        try {
            const response = await fetch('/decision-os/pomodoro/stats');
            if (response.ok) {
                const data = await response.json();
                this.sessionsCompleted = data.today_count || 0;
                this.updateStatsDisplay(data);
            }
        } catch (error) {
            console.error('Failed to load stats:', error);
        }
    }

    updateTodayStats() {
        const todayCount = document.getElementById('pomodoro-today-count');
        if (todayCount) {
            todayCount.textContent = this.sessionsCompleted;
        }
        this.loadTodayStats();
    }

    updateStatsDisplay(stats) {
        const elements = {
            'pomodoro-today-count': stats.today_count,
            'pomodoro-today-minutes': stats.today_minutes,
            'pomodoro-week-count': stats.week_count,
            'pomodoro-streak': stats.streak
        };

        for (const [id, value] of Object.entries(elements)) {
            const el = document.getElementById(id);
            if (el) el.textContent = value;
        }
    }

    playNotificationSound() {
        // استخدم Web Audio API مباشرة لأن ملف الصوت غير موجود
        this.playBeepSound();
    }

    playBeepSound() {
        try {
            const audioContext = new (window.AudioContext || window.webkitAudioContext)();

            // تشغيل 3 أصوات متتالية للتنبيه
            this.playTone(audioContext, 800, 0, 0.3);
            this.playTone(audioContext, 1000, 0.3, 0.3);
            this.playTone(audioContext, 1200, 0.6, 0.4);
        } catch (e) {
            console.log('Could not play notification sound:', e);
        }
    }

    playTone(audioContext, frequency, startDelay, duration) {
        const oscillator = audioContext.createOscillator();
        const gainNode = audioContext.createGain();

        oscillator.connect(gainNode);
        gainNode.connect(audioContext.destination);

        oscillator.frequency.value = frequency;
        oscillator.type = 'sine';

        const startTime = audioContext.currentTime + startDelay;
        gainNode.gain.setValueAtTime(0.5, startTime);
        gainNode.gain.exponentialRampToValueAtTime(0.01, startTime + duration);

        oscillator.start(startTime);
        oscillator.stop(startTime + duration);
    }

    showNotification(title, body) {
        if ('Notification' in window && Notification.permission === 'granted') {
            new Notification(title, { body, icon: '/assets/images/logo-sm.png' });
        }
    }

    // حفظ الحالة في localStorage
    saveState() {
        const state = {
            timeRemaining: this.timeRemaining,
            isRunning: this.isRunning,
            isBreak: this.isBreak,
            sessionsCompleted: this.sessionsCompleted,
            currentSessionId: this.currentSessionId,
            startTime: this.startTime,
            lastSaved: Date.now()
        };
        localStorage.setItem('pomodoroState', JSON.stringify(state));
    }

    // استعادة الحالة من localStorage
    loadState() {
        try {
            const saved = localStorage.getItem('pomodoroState');
            if (!saved) return;

            const state = JSON.parse(saved);
            const timeSinceLastSave = Date.now() - state.lastSaved;

            // إذا مر أقل من ساعة، استعد الحالة
            if (timeSinceLastSave < 3600000) {
                this.timeRemaining = state.timeRemaining;
                this.isBreak = state.isBreak;
                this.sessionsCompleted = state.sessionsCompleted;
                this.currentSessionId = state.currentSessionId;
                this.startTime = state.startTime;

                // إذا كانت الجلسة جارية، احسب الوقت المنقضي
                if (state.isRunning && state.startTime) {
                    const elapsed = Math.floor(timeSinceLastSave / 1000);
                    this.timeRemaining = Math.max(0, state.timeRemaining - elapsed);

                    // استمر تلقائياً
                    this.start();
                }
            } else {
                // امسح الحالة القديمة
                localStorage.removeItem('pomodoroState');
            }
        } catch (e) {
            console.error('Failed to load state:', e);
        }
    }

    // حفظ الإعدادات
    saveSettings() {
        const settings = {
            workDuration: this.workDuration,
            breakDuration: this.breakDuration,
            longBreakDuration: this.longBreakDuration,
            longBreakInterval: this.longBreakInterval,
            soundEnabled: this.soundEnabled
        };
        localStorage.setItem('pomodoroSettings', JSON.stringify(settings));
    }

    // تحميل الإعدادات
    loadSettings() {
        try {
            const saved = localStorage.getItem('pomodoroSettings');
            return saved ? JSON.parse(saved) : {};
        } catch (e) {
            return {};
        }
    }

    // إعداد modal الإعدادات
    setupSettingsModal() {
        const settingsBtn = document.getElementById('pomodoro-settings-btn');
        if (settingsBtn) {
            settingsBtn.addEventListener('click', () => this.openSettingsModal());
        }
    }

    // فتح modal الإعدادات
    openSettingsModal() {
        const modal = document.getElementById('pomodoroSettingsModal');
        if (modal) {
            // تعبئة القيم الحالية
            document.getElementById('setting-work-duration').value = this.workDuration / 60;
            document.getElementById('setting-break-duration').value = this.breakDuration / 60;
            document.getElementById('setting-long-break-duration').value = this.longBreakDuration / 60;
            document.getElementById('setting-long-break-interval').value = this.longBreakInterval;
            document.getElementById('setting-sound-enabled').checked = this.soundEnabled;

            const bsModal = new bootstrap.Modal(modal);
            bsModal.show();
        }
    }

    // تحديث الإعدادات
    updateSettings(settings) {
        if (settings.workDuration) this.workDuration = settings.workDuration * 60;
        if (settings.breakDuration) this.breakDuration = settings.breakDuration * 60;
        if (settings.longBreakDuration) this.longBreakDuration = settings.longBreakDuration * 60;
        if (settings.longBreakInterval) this.longBreakInterval = settings.longBreakInterval;
        if (settings.soundEnabled !== undefined) this.soundEnabled = settings.soundEnabled;

        this.saveSettings();
        this.reset();
    }

    // ابدأ الاستراحة
    startBreak() {
        this.isBreak = true;
        this.timeRemaining = this.getBreakDuration();
        this.startTime = null;
        this.saveState();
        this.updateDisplay();
        this.start();
    }
}

// Request notification permission
if ('Notification' in window && Notification.permission === 'default') {
    Notification.requestPermission();
}

// Initialize when DOM is ready
document.addEventListener('DOMContentLoaded', () => {
    if (document.getElementById('pomodoro-timer')) {
        window.pomodoroTimer = new PomodoroTimer();
    }
});

// حفظ إعدادات البومودورو
function savePomodoroSettings() {
    const settings = {
        workDuration: parseInt(document.getElementById('setting-work-duration').value) || 25,
        breakDuration: parseInt(document.getElementById('setting-break-duration').value) || 5,
        longBreakDuration: parseInt(document.getElementById('setting-long-break-duration').value) || 15,
        longBreakInterval: parseInt(document.getElementById('setting-long-break-interval').value) || 4,
        soundEnabled: document.getElementById('setting-sound-enabled').checked
    };

    if (window.pomodoroTimer) {
        window.pomodoroTimer.updateSettings(settings);
    }

    // إغلاق modal
    const modal = bootstrap.Modal.getInstance(document.getElementById('pomodoroSettingsModal'));
    if (modal) modal.hide();
}
