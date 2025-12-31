@extends('partials.layouts.master')

@section('title', 'Pomodoro Timer | Decision OS')
@section('title-sub', 'Decision OS')
@section('pagetitle', 'مؤقت Pomodoro')

@section('content')

<div id="layout-wrapper">

    {{-- Header Stats --}}
    <div class="row mb-4">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body text-center">
                    <h3 class="text-success mb-1">{{ $stats['completed_today'] ?? 0 }}</h3>
                    <p class="text-muted mb-0">جلسات مكتملة اليوم</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body text-center">
                    <h3 class="text-info mb-1">{{ $stats['focus_minutes'] ?? 0 }}</h3>
                    <p class="text-muted mb-0">دقائق تركيز</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body text-center">
                    @if($todayTask)
                        <span class="badge bg-success-subtle text-success">مهمة اليوم محددة</span>
                        <p class="text-muted mb-0 mt-2 text-truncate">{{ $todayTask->title }}</p>
                    @else
                        <span class="badge bg-warning-subtle text-warning">لا توجد مهمة</span>
                        <p class="text-muted mb-0 mt-2">
                            <a href="{{ route('decision-os.tasks.index') }}">حدد مهمة اليوم</a>
                        </p>
                    @endif
                </div>
            </div>
        </div>
    </div>

    {{-- Pomodoro Timer --}}
    <div class="row">
        <div class="col-lg-8 mx-auto">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="card-title mb-0">
                        <i class="ri-timer-line text-danger me-2"></i>
                        مؤقت Pomodoro
                    </h5>
                    <div class="btn-group" role="group">
                        <button type="button" class="btn btn-sm btn-outline-primary mode-btn active" data-mode="focus">تركيز 25</button>
                        <button type="button" class="btn btn-sm btn-outline-success mode-btn" data-mode="break">استراحة 5</button>
                        <button type="button" class="btn btn-sm btn-outline-info mode-btn" data-mode="long-break">استراحة 15</button>
                    </div>
                </div>
                <div class="card-body text-center py-5">
                    {{-- Timer Display --}}
                    <div id="timer-display" class="mb-4">
                        <h1 class="display-1 fw-bold text-primary mb-0" id="timer-text">25:00</h1>
                        <p class="text-muted" id="timer-label">وقت التركيز</p>
                    </div>

                    {{-- Progress Ring --}}
                    <div class="progress mb-4" style="height: 8px;">
                        <div class="progress-bar bg-primary" role="progressbar" id="timer-progress" style="width: 100%"></div>
                    </div>

                    {{-- Controls --}}
                    <div class="d-flex justify-content-center gap-3">
                        <button type="button" class="btn btn-primary btn-lg px-5" id="start-btn">
                            <i class="ri-play-line me-1"></i> ابدأ
                        </button>
                        <button type="button" class="btn btn-outline-secondary btn-lg px-4 d-none" id="pause-btn">
                            <i class="ri-pause-line"></i>
                        </button>
                        <button type="button" class="btn btn-outline-danger btn-lg px-4 d-none" id="stop-btn">
                            <i class="ri-stop-line"></i>
                        </button>
                        <button type="button" class="btn btn-outline-primary btn-lg px-4 d-none" id="resume-btn">
                            <i class="ri-play-line"></i>
                        </button>
                    </div>

                    {{-- Current Task --}}
                    @if($todayTask)
                    <div class="mt-4 pt-4 border-top">
                        <p class="text-muted mb-2">تركز على:</p>
                        <h5 class="mb-0">{{ $todayTask->title }}</h5>
                        <input type="hidden" id="current-task-id" value="{{ $todayTask->id }}">
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>

    {{-- Quick Stats & Links --}}
    <div class="row mt-4">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">
                        <i class="ri-history-line me-2"></i> الجلسات الأخيرة
                    </h5>
                </div>
                <div class="card-body">
                    <div id="recent-sessions">
                        <p class="text-muted text-center">ابدأ أول جلسة اليوم!</p>
                    </div>
                    <div class="text-center mt-3">
                        <a href="{{ route('decision-os.pomodoro.history') }}" class="btn btn-sm btn-outline-primary">
                            عرض كل السجل
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">
                        <i class="ri-lightbulb-line me-2"></i> نصائح Pomodoro
                    </h5>
                </div>
                <div class="card-body">
                    <ul class="list-unstyled mb-0">
                        <li class="mb-2">
                            <i class="ri-check-line text-success me-2"></i>
                            25 دقيقة تركيز كامل
                        </li>
                        <li class="mb-2">
                            <i class="ri-check-line text-success me-2"></i>
                            5 دقائق استراحة بين الجلسات
                        </li>
                        <li class="mb-2">
                            <i class="ri-check-line text-success me-2"></i>
                            15 دقيقة استراحة بعد 4 جلسات
                        </li>
                        <li class="mb-0">
                            <i class="ri-check-line text-success me-2"></i>
                            أغلق كل المشتتات
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection

@section('js')
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Timer configuration
    const modes = {
        focus: { duration: 25 * 60, label: 'وقت التركيز', color: 'primary' },
        break: { duration: 5 * 60, label: 'استراحة قصيرة', color: 'success' },
        'long-break': { duration: 15 * 60, label: 'استراحة طويلة', color: 'info' }
    };

    let currentMode = 'focus';
    let timeRemaining = modes[currentMode].duration;
    let totalTime = modes[currentMode].duration;
    let isRunning = false;
    let isPaused = false;
    let intervalId = null;
    let sessionId = null;
    let startTime = null;

    // DOM Elements
    const timerText = document.getElementById('timer-text');
    const timerLabel = document.getElementById('timer-label');
    const timerProgress = document.getElementById('timer-progress');
    const startBtn = document.getElementById('start-btn');
    const pauseBtn = document.getElementById('pause-btn');
    const stopBtn = document.getElementById('stop-btn');
    const resumeBtn = document.getElementById('resume-btn');
    const modeBtns = document.querySelectorAll('.mode-btn');
    const taskIdInput = document.getElementById('current-task-id');

    // Update display
    function updateDisplay() {
        const minutes = Math.floor(timeRemaining / 60);
        const seconds = timeRemaining % 60;
        timerText.textContent = `${String(minutes).padStart(2, '0')}:${String(seconds).padStart(2, '0')}`;
        
        const progress = (timeRemaining / totalTime) * 100;
        timerProgress.style.width = `${progress}%`;
        timerProgress.className = `progress-bar bg-${modes[currentMode].color}`;
        
        document.title = `${timerText.textContent} - Pomodoro`;
    }

    // Switch mode
    function switchMode(mode) {
        if (isRunning) return;
        
        currentMode = mode;
        timeRemaining = modes[mode].duration;
        totalTime = modes[mode].duration;
        timerLabel.textContent = modes[mode].label;
        
        modeBtns.forEach(btn => {
            btn.classList.toggle('active', btn.dataset.mode === mode);
        });
        
        updateDisplay();
    }

    // Start timer
    async function startTimer() {
        if (isRunning) return;
        
        isRunning = true;
        isPaused = false;
        startTime = Date.now();
        
        // Start session on server
        if (currentMode === 'focus') {
            try {
                const response = await fetch('{{ route("decision-os.pomodoro.start") }}', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    body: JSON.stringify({
                        task_id: taskIdInput ? taskIdInput.value : null
                    })
                });
                const data = await response.json();
                if (data.success) {
                    sessionId = data.session.id;
                }
            } catch (error) {
                console.error('Error starting session:', error);
            }
        }
        
        startBtn.classList.add('d-none');
        pauseBtn.classList.remove('d-none');
        stopBtn.classList.remove('d-none');
        
        intervalId = setInterval(() => {
            if (timeRemaining > 0) {
                timeRemaining--;
                updateDisplay();
            } else {
                completeTimer('completed');
            }
        }, 1000);
    }

    // Pause timer
    function pauseTimer() {
        if (!isRunning || isPaused) return;
        
        isPaused = true;
        clearInterval(intervalId);
        
        pauseBtn.classList.add('d-none');
        resumeBtn.classList.remove('d-none');
    }

    // Resume timer
    function resumeTimer() {
        if (!isRunning || !isPaused) return;
        
        isPaused = false;
        
        resumeBtn.classList.add('d-none');
        pauseBtn.classList.remove('d-none');
        
        intervalId = setInterval(() => {
            if (timeRemaining > 0) {
                timeRemaining--;
                updateDisplay();
            } else {
                completeTimer('completed');
            }
        }, 1000);
    }

    // Stop timer
    function stopTimer() {
        if (!isRunning) return;
        completeTimer('interrupted');
    }

    // Complete timer
    async function completeTimer(status) {
        clearInterval(intervalId);
        isRunning = false;
        isPaused = false;
        
        const duration = totalTime - timeRemaining;
        
        // Complete session on server
        if (currentMode === 'focus' && sessionId) {
            try {
                await fetch(`/decision-os/pomodoro/${sessionId}/complete`, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    body: JSON.stringify({
                        status: status,
                        duration: duration
                    })
                });
            } catch (error) {
                console.error('Error completing session:', error);
            }
        }
        
        // Show notification
        if (status === 'completed') {
            if (Notification.permission === 'granted') {
                new Notification('جلسة مكتملة!', {
                    body: currentMode === 'focus' ? 'حان وقت الاستراحة' : 'حان وقت العمل',
                    icon: '/assets/images/favicon.ico'
                });
            }
            // Play sound
            const audio = new Audio('/assets/sounds/bell.mp3');
            audio.play().catch(() => {});
        }
        
        // Reset UI
        timeRemaining = modes[currentMode].duration;
        sessionId = null;
        
        startBtn.classList.remove('d-none');
        pauseBtn.classList.add('d-none');
        stopBtn.classList.add('d-none');
        resumeBtn.classList.add('d-none');
        
        updateDisplay();
        
        // Reload stats
        if (status === 'completed') {
            setTimeout(() => location.reload(), 1000);
        }
    }

    // Event listeners
    startBtn.addEventListener('click', startTimer);
    pauseBtn.addEventListener('click', pauseTimer);
    resumeBtn.addEventListener('click', resumeTimer);
    stopBtn.addEventListener('click', stopTimer);
    
    modeBtns.forEach(btn => {
        btn.addEventListener('click', () => switchMode(btn.dataset.mode));
    });

    // Request notification permission
    if (Notification.permission === 'default') {
        Notification.requestPermission();
    }

    // Initial display
    updateDisplay();
});
</script>
<script type="module" src="{{ asset('assets/js/app.js') }}"></script>
@endsection
