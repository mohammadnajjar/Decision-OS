@extends('partials.layouts.master')

@section('title', 'الإدخال اليومي السريع | Decision OS')
@section('title-sub', 'Decision OS')
@section('pagetitle', 'الإدخال اليومي السريع')

@section('content')
<div id="layout-wrapper">

    {{-- Header with Date --}}
    <div class="row mb-4">
        <div class="col-12">
            <div class="card bg-primary text-white">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h3 class="text-white mb-1">
                                <i class="ri-calendar-check-line me-2"></i>
                                {{ now()->translatedFormat('l، d F Y') }}
                            </h3>
                            <p class="text-white-50 mb-0">سجّل يومك بسرعة من مكان واحد</p>
                        </div>
                        <div class="text-end">
                            <div class="fs-1">📝</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        {{-- Column 1: Focus & Tasks --}}
        <div class="col-xl-4 col-lg-6">
            {{-- Today One Thing --}}
            <div class="card border-primary">
                <div class="card-header bg-primary text-white">
                    <h5 class="card-title mb-0">
                        <i class="ri-focus-3-line me-2"></i>
                        المهمة الأهم اليوم
                    </h5>
                </div>
                <div class="card-body">
                    @if($todayTask)
                        <div class="d-flex align-items-center gap-3 p-3 rounded {{ $todayTask->completed ? 'bg-success-subtle' : 'bg-warning-subtle' }}">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox"
                                       {{ $todayTask->completed ? 'checked disabled' : '' }}
                                       onchange="toggleTask({{ $todayTask->id }})">
                            </div>
                            <div class="flex-grow-1">
                                <span class="fw-medium {{ $todayTask->completed ? 'text-decoration-line-through' : '' }}">
                                    {{ $todayTask->title }}
                                </span>
                            </div>
                            @if($todayTask->completed)
                                <span class="badge bg-success">✓ مكتمل</span>
                            @endif
                        </div>
                    @else
                        <form action="{{ route('decision-os.tasks.store') }}" method="POST">
                            @csrf
                            <input type="hidden" name="type" value="one_thing">
                            <input type="hidden" name="date" value="{{ today()->toDateString() }}">
                            <div class="input-group">
                                <input type="text" name="title" class="form-control form-control-lg"
                                       placeholder="ما هي المهمة الوحيدة الأهم اليوم؟" required>
                                <button type="submit" class="btn btn-primary">
                                    <i class="ri-check-line"></i>
                                </button>
                            </div>
                        </form>
                    @endif
                </div>
            </div>

            {{-- Quick Task Add --}}
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">
                        <i class="ri-add-circle-line me-2 text-success"></i>
                        إضافة مهمة سريعة
                    </h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('decision-os.tasks.store') }}" method="POST">
                        @csrf
                        <input type="hidden" name="type" value="top_3">
                        <input type="hidden" name="date" value="{{ today()->toDateString() }}">
                        <div class="input-group mb-2">
                            <input type="text" name="title" class="form-control" placeholder="عنوان المهمة" required>
                            <button type="submit" class="btn btn-success">
                                <i class="ri-add-line"></i> أضف
                            </button>
                        </div>
                    </form>
                    {{-- Today's tasks list --}}
                    @if($topTasks->count())
                        <ul class="list-group list-group-flush mt-3">
                            @foreach($topTasks as $task)
                                <li class="list-group-item d-flex align-items-center gap-2 px-0">
                                    <input type="checkbox" class="form-check-input"
                                           {{ $task->completed ? 'checked' : '' }}
                                           onchange="toggleTask({{ $task->id }})">
                                    <span class="{{ $task->completed ? 'text-decoration-line-through text-muted' : '' }}">
                                        {{ $task->title }}
                                    </span>
                                </li>
                            @endforeach
                        </ul>
                    @endif
                </div>
            </div>
        </div>

        {{-- Column 2: Finance --}}
        <div class="col-xl-4 col-lg-6">
            {{-- Quick Expense --}}
            <div class="card border-danger">
                <div class="card-header bg-danger text-white">
                    <h5 class="card-title mb-0">
                        <i class="ri-wallet-3-line me-2"></i>
                        تسجيل مصروف
                    </h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('decision-os.expenses.quick-store') }}" method="POST">
                        @csrf
                        <div class="row g-2">
                            <div class="col-6">
                                <input type="number" name="amount" class="form-control form-control-lg"
                                       placeholder="المبلغ" step="0.01" min="0.01" required>
                            </div>
                            <div class="col-6">
                                <select name="expense_category_id" class="form-select form-select-lg" required>
                                    <option value="">الفئة</option>
                                    @foreach($expenseCategories as $cat)
                                        <option value="{{ $cat->id }}">{{ $cat->icon }} {{ $cat->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-12">
                                <input type="text" name="note" class="form-control" placeholder="ملاحظة (اختياري)">
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-danger w-100">
                                    <i class="ri-add-line me-1"></i> سجّل المصروف
                                </button>
                            </div>
                        </div>
                    </form>

                    {{-- Today's expenses summary --}}
                    <div class="mt-3 p-3 bg-light rounded">
                        <div class="d-flex justify-content-between">
                            <span>صرف اليوم:</span>
                            <span class="fw-bold text-danger">${{ number_format($todayExpenses, 2) }}</span>
                        </div>
                        <div class="d-flex justify-content-between mt-1">
                            <span>صرف الأسبوع:</span>
                            <span class="fw-bold">${{ number_format($weekExpenses, 2) }}</span>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Quick Income --}}
            <div class="card border-success">
                <div class="card-header bg-success text-white">
                    <h5 class="card-title mb-0">
                        <i class="ri-money-dollar-circle-line me-2"></i>
                        تسجيل دخل
                    </h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('decision-os.incomes.store') }}" method="POST">
                        @csrf
                        <input type="hidden" name="date" value="{{ today()->toDateString() }}">
                        <div class="row g-2">
                            <div class="col-6">
                                <input type="number" name="amount" class="form-control"
                                       placeholder="المبلغ" step="0.01" min="0.01" required>
                            </div>
                            <div class="col-6">
                                <input type="text" name="source" class="form-control" placeholder="المصدر">
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-success w-100">
                                    <i class="ri-add-line me-1"></i> سجّل الدخل
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        {{-- Column 3: Discipline & Quran --}}
        <div class="col-xl-4 col-lg-12">
            {{-- Discipline Metrics --}}
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">
                        <i class="ri-heart-pulse-line me-2 text-danger"></i>
                        مقاييس الانضباط اليوم
                    </h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('decision-os.metrics.store') }}" method="POST">
                        @csrf
                        <input type="hidden" name="date" value="{{ today()->toDateString() }}">

                        {{-- Gym Today --}}
                        <div class="d-flex justify-content-between align-items-center p-3 bg-light rounded mb-2">
                            <div>
                                <i class="ri-run-line text-primary me-2"></i>
                                <span>تمرين اليوم؟</span>
                            </div>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" name="metrics[{{ $gymMetricId }}]"
                                       value="1" {{ ($metricsToday[$gymMetricId] ?? 0) ? 'checked' : '' }}>
                            </div>
                        </div>

                        {{-- Rest Day --}}
                        <div class="d-flex justify-content-between align-items-center p-3 bg-light rounded mb-2">
                            <div>
                                <i class="ri-zzz-line text-info me-2"></i>
                                <span>يوم راحة؟</span>
                            </div>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" name="metrics[{{ $restMetricId }}]"
                                       value="1" {{ ($metricsToday[$restMetricId] ?? 0) ? 'checked' : '' }}>
                            </div>
                        </div>

                        {{-- Work Hours --}}
                        <div class="p-3 bg-light rounded mb-3">
                            <label class="form-label">
                                <i class="ri-time-line text-warning me-2"></i>
                                ساعات العمل
                            </label>
                            <div class="input-group">
                                <input type="number" name="metrics[{{ $workHoursMetricId }}]" class="form-control"
                                       value="{{ $metricsToday[$workHoursMetricId] ?? '' }}"
                                       placeholder="0" min="0" max="24" step="0.5">
                                <span class="input-group-text">ساعة</span>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary w-100">
                            <i class="ri-save-line me-1"></i> حفظ المقاييس
                        </button>
                    </form>
                </div>
            </div>

            {{-- Quran Quick Log --}}
            <div class="card border-success">
                <div class="card-header bg-success-subtle">
                    <h5 class="card-title mb-0">
                        <i class="ri-book-open-line me-2 text-success"></i>
                        قراءة القرآن اليوم
                    </h5>
                </div>
                <div class="card-body">
                    @if($quranProgress)
                        <div class="text-center mb-3">
                            <div class="fs-2 fw-bold text-success">{{ $quranProgress->progress_percentage }}%</div>
                            <div class="text-muted">{{ $quranProgress->completed_pages }}/{{ $quranProgress->target_pages }} صفحة</div>
                            <div class="progress mt-2" style="height: 10px;">
                                <div class="progress-bar bg-success" style="width: {{ $quranProgress->progress_percentage }}%"></div>
                            </div>
                        </div>
                        <form action="{{ route('decision-os.quran.log-reading') }}" method="POST">
                            @csrf
                            <div class="input-group">
                                <input type="number" name="pages" class="form-control" placeholder="صفحات" min="1" max="604">
                                <button type="submit" class="btn btn-success">سجّل</button>
                            </div>
                            <div class="btn-group btn-group-sm w-100 mt-2">
                                <button type="button" class="btn btn-outline-success quick-quran" data-pages="2">2</button>
                                <button type="button" class="btn btn-outline-success quick-quran" data-pages="5">5</button>
                                <button type="button" class="btn btn-outline-success quick-quran" data-pages="10">10</button>
                                <button type="button" class="btn btn-outline-success quick-quran" data-pages="20">جزء</button>
                            </div>
                        </form>
                    @else
                        <a href="{{ route('decision-os.quran.index') }}" class="btn btn-outline-success w-100">
                            ابدأ ختمة هذا الشهر
                        </a>
                    @endif
                </div>
            </div>
        </div>
    </div>

    {{-- Stats Row --}}
    <div class="row mt-4">
        <div class="col-md-3 col-6">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <div>
                            <p class="fw-medium text-muted mb-0">الرصيد المتاح</p>
                            <h2 class="mt-2 mb-0 fs-22 fw-semibold {{ $cashOnHand >= 0 ? 'text-success' : 'text-danger' }}">
                                ${{ number_format($cashOnHand, 2) }}
                            </h2>
                        </div>
                        <div class="avatar-md d-flex justify-content-center align-items-center rounded-circle text-success border border-dark border-opacity-20 shadow-sm fs-5">
                            <i class="ri-wallet-3-line"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-6">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <div>
                            <p class="fw-medium text-muted mb-0">Pomodoros اليوم</p>
                            <h2 class="mt-2 mb-0 fs-22 fw-semibold">{{ $todayPomodoros }}</h2>
                        </div>
                        <div class="avatar-md d-flex justify-content-center align-items-center rounded-circle text-danger border border-dark border-opacity-20 shadow-sm fs-5">
                            <i class="ri-timer-line"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-6">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <div>
                            <p class="fw-medium text-muted mb-0">مهام مكتملة</p>
                            <h2 class="mt-2 mb-0 fs-22 fw-semibold text-success">{{ $completedTasksToday }}</h2>
                        </div>
                        <div class="avatar-md d-flex justify-content-center align-items-center rounded-circle text-primary border border-dark border-opacity-20 shadow-sm fs-5">
                            <i class="ri-checkbox-circle-line"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-6">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <div>
                            <p class="fw-medium text-muted mb-0">دخل الشهر</p>
                            <h2 class="mt-2 mb-0 fs-22 fw-semibold text-success">
                                ${{ number_format($monthIncome, 2) }}
                            </h2>
                        </div>
                        <div class="avatar-md d-flex justify-content-center align-items-center rounded-circle text-info border border-dark border-opacity-20 shadow-sm fs-5">
                            <i class="ri-money-dollar-circle-line"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection

@section('js')
<script>
function toggleTask(taskId) {
    fetch(`/decision-os/tasks/${taskId}/toggle`, {
        method: 'PATCH',
        headers: {
            'X-CSRF-TOKEN': '{{ csrf_token() }}',
            'Accept': 'application/json',
        }
    }).then(() => location.reload());
}

document.querySelectorAll('.quick-quran').forEach(btn => {
    btn.addEventListener('click', function() {
        const pages = this.dataset.pages;
        const form = document.createElement('form');
        form.method = 'POST';
        form.action = '{{ route("decision-os.quran.log-reading") }}';
        form.innerHTML = `@csrf<input type="hidden" name="pages" value="${pages}">`;
        document.body.appendChild(form);
        form.submit();
    });
});
</script>
@endsection
