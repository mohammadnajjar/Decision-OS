{{-- Pomodoro Timer Component --}}
<div class="card h-100" id="pomodoro-timer">
    <div class="card-header d-flex justify-content-between align-items-center">
        <h5 class="card-title mb-0">
            <i class="ri-timer-line me-2 text-danger"></i>
            Pomodoro Timer
        </h5>
        <button type="button" class="btn btn-sm btn-outline-secondary" id="pomodoro-settings-btn" data-bs-toggle="modal" data-bs-target="#pomodoroSettingsModal">
            <i class="ri-settings-3-line"></i>
        </button>
    </div>
    <div class="card-body text-center">
        {{-- Timer Display --}}
        <div class="pomodoro-timer mb-4">
            <div class="display-1 fw-bold text-primary" id="pomodoro-display">25:00</div>
            <small class="text-muted" id="pomodoro-status">جاهز للبدء</small>
        </div>

        {{-- Timer Controls --}}
        <div class="d-flex justify-content-center gap-2 mb-4">
            <button type="button" class="btn btn-success btn-lg" id="pomodoro-start">
                <i class="ri-play-line"></i> ابدأ
            </button>
            <button type="button" class="btn btn-warning btn-lg d-none" id="pomodoro-pause">
                <i class="ri-pause-line"></i> إيقاف مؤقت
            </button>
            <button type="button" class="btn btn-secondary btn-lg d-none" id="pomodoro-reset">
                <i class="ri-restart-line"></i> إعادة
            </button>
            <button type="button" class="btn btn-info btn-lg d-none" id="pomodoro-skip">
                <i class="ri-skip-forward-line"></i> تخطي
            </button>
        </div>

        {{-- Session Stats --}}
        <div class="row text-center border-top pt-3">
            <div class="col-4">
                <div class="fs-4 fw-bold text-success" id="pomodoro-completed">0</div>
                <small class="text-muted">مكتملة</small>
            </div>
            <div class="col-4">
                <div class="fs-4 fw-bold text-primary" id="pomodoro-focus-minutes">0</div>
                <small class="text-muted">دقيقة تركيز</small>
            </div>
            <div class="col-4">
                <div class="fs-4 fw-bold text-warning" id="pomodoro-session-number">1</div>
                <small class="text-muted">جلسة</small>
            </div>
        </div>
    </div>
</div>

{{-- Pomodoro Settings Modal --}}
<div class="modal fade" id="pomodoroSettingsModal" tabindex="-1" aria-labelledby="pomodoroSettingsModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title" id="pomodoroSettingsModalLabel">
                    <i class="ri-settings-3-line me-2"></i>
                    إعدادات البومودورو
                </h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <label for="setting-work-duration" class="form-label">
                        <i class="ri-timer-line me-1 text-danger"></i>
                        مدة جلسة العمل (بالدقائق)
                    </label>
                    <input type="number" class="form-control" id="setting-work-duration" value="25" min="1" max="120">
                </div>
                <div class="mb-3">
                    <label for="setting-break-duration" class="form-label">
                        <i class="ri-cup-line me-1 text-success"></i>
                        مدة الاستراحة القصيرة (بالدقائق)
                    </label>
                    <input type="number" class="form-control" id="setting-break-duration" value="5" min="1" max="30">
                </div>
                <div class="mb-3">
                    <label for="setting-long-break-duration" class="form-label">
                        <i class="ri-moon-line me-1 text-info"></i>
                        مدة الاستراحة الطويلة (بالدقائق)
                    </label>
                    <input type="number" class="form-control" id="setting-long-break-duration" value="15" min="1" max="60">
                </div>
                <div class="mb-3">
                    <label for="setting-long-break-interval" class="form-label">
                        <i class="ri-repeat-line me-1 text-warning"></i>
                        عدد الجلسات قبل الاستراحة الطويلة
                    </label>
                    <input type="number" class="form-control" id="setting-long-break-interval" value="4" min="1" max="10">
                </div>
                <div class="form-check form-switch mb-3">
                    <input class="form-check-input" type="checkbox" id="setting-sound-enabled" checked>
                    <label class="form-check-label" for="setting-sound-enabled">
                        <i class="ri-volume-up-line me-1"></i>
                        تفعيل الصوت عند انتهاء الجلسة
                    </label>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">إلغاء</button>
                <button type="button" class="btn btn-primary" onclick="savePomodoroSettings()">
                    <i class="ri-save-line me-1"></i>
                    حفظ الإعدادات
                </button>
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
