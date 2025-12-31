{{-- Pomodoro Timer Component --}}
<div class="card h-100" id="pomodoro-timer">
    <div class="card-header">
        <h5 class="card-title mb-0">
            <i class="ri-timer-line me-2 text-danger"></i>
            Pomodoro Timer
        </h5>
    </div>
    <div class="card-body text-center">
        {{-- Timer Display --}}
        <div class="pomodoro-timer mb-4">
            <div class="display-1 fw-bold text-primary" id="timerDisplay">25:00</div>
            <small class="text-muted" id="timerStatus">جاهز للبدء</small>
        </div>

        {{-- Timer Controls --}}
        <div class="d-flex justify-content-center gap-2 mb-4">
            <button type="button" class="btn btn-success btn-lg" id="startBtn" onclick="pomodoroTimer.start()">
                <i class="ri-play-line"></i> ابدأ
            </button>
            <button type="button" class="btn btn-warning btn-lg d-none" id="pauseBtn" onclick="pomodoroTimer.pause()">
                <i class="ri-pause-line"></i> إيقاف مؤقت
            </button>
            <button type="button" class="btn btn-danger btn-lg d-none" id="stopBtn" onclick="pomodoroTimer.stop()">
                <i class="ri-stop-line"></i> إنهاء
            </button>
        </div>

        {{-- Session Stats --}}
        <div class="row text-center border-top pt-3">
            <div class="col-4">
                <div class="fs-4 fw-bold text-success" id="completedCount">0</div>
                <small class="text-muted">مكتملة</small>
            </div>
            <div class="col-4">
                <div class="fs-4 fw-bold text-primary" id="focusMinutes">0</div>
                <small class="text-muted">دقيقة تركيز</small>
            </div>
            <div class="col-4">
                <div class="fs-4 fw-bold text-warning" id="sessionNumber">1</div>
                <small class="text-muted">جلسة</small>
            </div>
        </div>
    </div>
</div>

{{-- Pomodoro Complete Modal --}}
<div class="modal fade" id="pomodoroCompleteModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-success text-white">
                <h5 class="modal-title">
                    <i class="ri-checkbox-circle-line me-2"></i>
                    جلسة مكتملة!
                </h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-center py-4">
                <div class="display-1 text-success mb-3">🎉</div>
                <h4>أحسنت! أكملت جلسة Pomodoro</h4>
                <p class="text-muted">خذ استراحة قصيرة (5 دقائق)</p>
            </div>
            <div class="modal-footer justify-content-center">
                <button type="button" class="btn btn-primary" data-bs-dismiss="modal" onclick="pomodoroTimer.startBreak()">
                    <i class="ri-cup-line me-1"></i> ابدأ الاستراحة
                </button>
                <button type="button" class="btn btn-success" data-bs-dismiss="modal" onclick="pomodoroTimer.start()">
                    <i class="ri-play-line me-1"></i> جلسة جديدة
                </button>
            </div>
        </div>
    </div>
</div>
