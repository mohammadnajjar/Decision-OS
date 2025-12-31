/**
 * Decision OS - Pomodoro Timer
 * مؤقت بومودورو للتركيز والإنتاجية
 */

class PomodoroTimer {
    constructor(options = {}) {
        this.workDuration = options.workDuration || 25 * 60; // 25 دقيقة
        this.breakDuration = options.breakDuration || 5 * 60; // 5 دقائق
        this.longBreakDuration = options.longBreakDuration || 15 * 60; // 15 دقيقة
        this.longBreakInterval = options.longBreakInterval || 4; // كل 4 جلسات

        this.timeRemaining = this.workDuration;
        this.isRunning = false;
        this.isBreak = false;
        this.sessionsCompleted = 0;
        this.currentSessionId = null;
        this.intervalId = null;

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
        this.updateDisplay();
        this.loadTodayStats();
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
        }

        this.isRunning = true;
        this.updateButtons();

        this.intervalId = setInterval(() => {
            this.timeRemaining--;
            this.updateDisplay();

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
    }

    reset() {
        this.pause();
        this.timeRemaining = this.isBreak ? this.getBreakDuration() : this.workDuration;
        this.updateDisplay();
    }

    async skip() {
        this.pause();

        // إذا كانت جلسة عمل وليست استراحة، سجّلها كـ interrupted
        if (!this.isBreak && this.currentSessionId) {
            await this.interruptSession();
        }

        // انتقل للمرحلة التالية بدون احتساب كجلسة مكتملة
        if (!this.isBreak) {
            // تخطي جلسة العمل → انتقل للاستراحة
            this.isBreak = true;
            this.timeRemaining = this.getBreakDuration();
        } else {
            // تخطي الاستراحة → انتقل للعمل
            this.isBreak = false;
            this.timeRemaining = this.workDuration;
        }

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
            this.sessionsCompleted++;
            await this.completeSession();
            this.playNotificationSound();
            this.showNotification('انتهت جلسة العمل!', 'حان وقت الاستراحة 🎉');

            // التحول للاستراحة
            this.isBreak = true;
            this.timeRemaining = this.getBreakDuration();
        } else {
            // انتهت الاستراحة
            this.playNotificationSound();
            this.showNotification('انتهت الاستراحة!', 'حان وقت العمل 💪');

            // التحول للعمل
            this.isBreak = false;
            this.timeRemaining = this.workDuration;
        }

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
                this.currentSessionId = data.session_id;
            }
        } catch (error) {
            console.error('Failed to start session:', error);
        }
    }

    async completeSession() {
        if (!this.currentSessionId) return;

        try {
            await fetch(`/decision-os/pomodoro/${this.currentSessionId}/complete`, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                }
            });

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
        try {
            const audio = new Audio('/assets/sounds/notification.mp3');
            audio.play().catch(() => {});
        } catch (e) {}
    }

    showNotification(title, body) {
        if ('Notification' in window && Notification.permission === 'granted') {
            new Notification(title, { body, icon: '/assets/images/logo-sm.png' });
        }
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
