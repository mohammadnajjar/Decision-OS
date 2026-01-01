@extends('partials.layouts.master')

@section('title', 'ختمة القرآن | Decision OS')
@section('title-sub', 'Decision OS')
@section('pagetitle', 'ختمة القرآن الشهرية')

@section('content')

{{-- تذكير الأذكار --}}
@if(isset($adhkarReminder))
<div class="row mb-3">
    <div class="col-12">
        <div class="alert alert-{{ $adhkarReminder['color'] }} alert-dismissible fade show d-flex align-items-center" role="alert">
            <i class="{{ $adhkarReminder['icon'] }} fs-4 me-3"></i>
            <div class="flex-grow-1">
                <strong>{{ $adhkarReminder['title'] }}</strong>
                <p class="mb-0 small">{{ $adhkarReminder['message'] }}</p>
            </div>
            <a href="{{ route('decision-os.adhkar') }}" class="btn btn-{{ $adhkarReminder['color'] }} btn-sm ms-3">
                {{ $adhkarReminder['action_text'] }}
            </a>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    </div>
</div>
@endif

<div class="row">
    {{-- البطاقة الرئيسية - الختمة الحالية --}}
    <div class="col-xl-8">
        <div class="card">
            <div class="card-header d-flex align-items-center justify-content-between">
                <div>
                    <h5 class="card-title mb-1">
                        <i class="ri-book-open-line me-2 text-success"></i>
                        ختمة شهر {{ $currentProgress->month_name }} {{ $currentProgress->year }}
                    </h5>
                    <small class="text-muted">تتبع تقدمك في قراءة القرآن الكريم</small>
                </div>
                @php
                    $statusColor = $currentProgress->calculateStatus();
                    $statusBg = match($statusColor) {
                        'green' => 'bg-success',
                        'yellow' => 'bg-warning',
                        'red' => 'bg-danger',
                        default => 'bg-secondary'
                    };
                @endphp
                <span class="badge {{ $statusBg }} fs-6">
                    @if($currentProgress->status === 'completed')
                        🎉 مكتملة
                    @elseif($statusColor === 'green')
                        ✅ في الموعد
                    @elseif($statusColor === 'yellow')
                        ⚠️ متأخر قليلاً
                    @else
                        🔴 متأخر
                    @endif
                </span>
            </div>
            <div class="card-body">
                {{-- شريط التقدم --}}
                <div class="mb-4">
                    <div class="d-flex justify-content-between mb-2">
                        <span>التقدم: {{ $currentProgress->completed_pages }} / {{ $currentProgress->target_pages }} صفحة</span>
                        <span class="fw-bold">{{ $currentProgress->progress_percentage }}%</span>
                    </div>
                    <div class="progress" style="height: 25px;">
                        <div class="progress-bar {{ $statusBg }}" role="progressbar"
                             style="width: {{ $currentProgress->progress_percentage }}%"
                             aria-valuenow="{{ $currentProgress->progress_percentage }}"
                             aria-valuemin="0" aria-valuemax="100">
                            {{ $currentProgress->progress_percentage }}%
                        </div>
                    </div>
                </div>

                {{-- معلومات الموقع الحالي --}}
                <div class="row text-center mb-4">
                    <div class="col-md-3 col-6 mb-3">
                        <div class="border rounded p-3">
                            <div class="fs-2 text-primary fw-bold">{{ $currentProgress->current_juz }}</div>
                            <small class="text-muted">الجزء الحالي</small>
                            <div class="small text-success">{{ $currentProgress->current_juz_name }}</div>
                        </div>
                    </div>
                    <div class="col-md-3 col-6 mb-3">
                        <div class="border rounded p-3">
                            <div class="fs-2 text-info fw-bold">{{ $currentProgress->current_page }}</div>
                            <small class="text-muted">الصفحة الحالية</small>
                        </div>
                    </div>
                    <div class="col-md-3 col-6 mb-3">
                        <div class="border rounded p-3">
                            <div class="fs-2 text-warning fw-bold">{{ $currentProgress->remaining_pages }}</div>
                            <small class="text-muted">صفحة متبقية</small>
                        </div>
                    </div>
                    <div class="col-md-3 col-6 mb-3">
                        <div class="border rounded p-3">
                            <div class="fs-2 text-danger fw-bold">{{ $currentProgress->daily_pages_needed }}</div>
                            <small class="text-muted">صفحة/يوم مطلوبة</small>
                        </div>
                    </div>
                </div>

                {{-- نموذج تسجيل القراءة --}}
                <div class="row">
                    <div class="col-md-6">
                        <div class="card bg-light border-0">
                            <div class="card-body">
                                <h6 class="card-title">📖 تسجيل قراءة سريعة</h6>
                                <form action="{{ route('decision-os.quran.log-reading') }}" method="POST" class="d-flex gap-2">
                                    @csrf
                                    <input type="number" name="pages" class="form-control" placeholder="عدد الصفحات"
                                           min="1" max="604" required style="max-width: 150px;">
                                    <button type="submit" class="btn btn-success">
                                        <i class="ri-add-line"></i> سجّل
                                    </button>
                                </form>
                                <div class="mt-2">
                                    <small class="text-muted">أزرار سريعة:</small>
                                    <div class="btn-group btn-group-sm mt-1">
                                        <button type="button" class="btn btn-outline-primary quick-log" data-pages="2">2 صفحة</button>
                                        <button type="button" class="btn btn-outline-primary quick-log" data-pages="5">5 صفحات</button>
                                        <button type="button" class="btn btn-outline-primary quick-log" data-pages="10">10 صفحات</button>
                                        <button type="button" class="btn btn-outline-primary quick-log" data-pages="20">جزء كامل</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card bg-light border-0">
                            <div class="card-body">
                                <h6 class="card-title">📍 تحديث الموقع</h6>
                                <form action="{{ route('decision-os.quran.update-position') }}" method="POST">
                                    @csrf
                                    <div class="row g-2">
                                        <div class="col-6">
                                            <label class="form-label small">الجزء</label>
                                            <select name="current_juz" class="form-select form-select-sm">
                                                @for($i = 1; $i <= 30; $i++)
                                                    <option value="{{ $i }}" {{ $currentProgress->current_juz == $i ? 'selected' : '' }}>
                                                        {{ $i }} - {{ \App\Models\QuranProgress::JUZ_NAMES[$i] }}
                                                    </option>
                                                @endfor
                                            </select>
                                        </div>
                                        <div class="col-6">
                                            <label class="form-label small">الصفحة</label>
                                            <input type="number" name="current_page" class="form-control form-control-sm"
                                                   value="{{ $currentProgress->current_page }}" min="1" max="604">
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-sm mt-2 w-100">
                                        <i class="ri-save-line"></i> حفظ الموقع
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- ملاحظات --}}
                <div class="mt-4">
                    <form action="{{ route('decision-os.quran.update-notes') }}" method="POST">
                        @csrf
                        <label class="form-label">📝 ملاحظات وتأملات</label>
                        <textarea name="notes" class="form-control" rows="2" placeholder="سجّل تأملاتك وملاحظاتك...">{{ $currentProgress->notes }}</textarea>
                        <button type="submit" class="btn btn-outline-secondary btn-sm mt-2">حفظ الملاحظات</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    {{-- الإحصائيات والتاريخ --}}
    <div class="col-xl-4">
        {{-- إحصائيات --}}
        <div class="card mb-3">
            <div class="card-header">
                <h6 class="card-title mb-0">📊 إحصائياتي</h6>
            </div>
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center mb-3 pb-3 border-bottom">
                    <span>إجمالي الختمات</span>
                    <span class="badge bg-success fs-5">{{ $completedCount }}</span>
                </div>
                <div class="d-flex justify-content-between align-items-center mb-3 pb-3 border-bottom">
                    <span>ختمات هذه السنة</span>
                    <span class="badge bg-primary fs-5">{{ $thisYearCompleted }}</span>
                </div>
                <div class="d-flex justify-content-between align-items-center">
                    <span>آخر قراءة</span>
                    <span class="text-muted">
                        {{ $currentProgress->last_read_date ? $currentProgress->last_read_date->diffForHumans() : 'لم تبدأ بعد' }}
                    </span>
                </div>
            </div>
        </div>

        {{-- تاريخ الختمات --}}
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h6 class="card-title mb-0">📅 سجل الختمات</h6>
            </div>
            <div class="card-body p-0">
                <ul class="list-group list-group-flush">
                    @forelse($history as $record)
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <div>
                                <span class="fw-medium">{{ $record->month_name }} {{ $record->year }}</span>
                                <div class="small text-muted">{{ $record->completed_pages }}/{{ $record->target_pages }} صفحة</div>
                            </div>
                            @if($record->status === 'completed')
                                <span class="badge bg-success">🎉 مكتملة</span>
                            @elseif($record->status === 'in_progress')
                                <span class="badge bg-warning">{{ $record->progress_percentage }}%</span>
                            @else
                                <span class="badge bg-secondary">لم تبدأ</span>
                            @endif
                        </li>
                    @empty
                        <li class="list-group-item text-center text-muted">
                            لا يوجد سجل سابق
                        </li>
                    @endforelse
                </ul>
            </div>
        </div>

        {{-- أزرار الإجراءات --}}
        <div class="mt-3">
            <form action="{{ route('decision-os.quran.reset') }}" method="POST"
                  onsubmit="return confirm('هل أنت متأكد من إعادة تعيين الختمة؟')">
                @csrf
                <button type="submit" class="btn btn-outline-danger w-100">
                    <i class="ri-refresh-line"></i> إعادة تعيين الختمة
                </button>
            </form>
        </div>
    </div>
</div>

{{-- جدول الأجزاء --}}
<div class="row mt-4">
    <div class="col-12">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h6 class="card-title mb-0">📚 الأجزاء الثلاثين</h6>
                <div class="btn-group btn-group-sm" role="group">
                    <button type="button" class="btn btn-outline-primary active" id="viewJuz">الأجزاء</button>
                    <button type="button" class="btn btn-outline-primary" id="viewSurah">السور</button>
                </div>
            </div>
            <div class="card-body">
                {{-- عرض الأجزاء --}}
                <div id="juzGrid">
                    <div class="row">
                        @for($juz = 1; $juz <= 30; $juz++)
                            @php
                                $isCompleted = $currentProgress->current_juz > $juz ||
                                              ($currentProgress->status === 'completed');
                                $isCurrent = $currentProgress->current_juz === $juz;
                                $juzInfo = $juzList[$juz] ?? null;
                            @endphp
                            <div class="col-lg-2 col-md-3 col-4 mb-2">
                                <div class="p-2 rounded text-center juz-card {{ $isCompleted ? 'bg-success text-white' : ($isCurrent ? 'bg-warning' : 'bg-light') }}"
                                     style="cursor: pointer;"
                                     data-bs-toggle="modal" data-bs-target="#juzModal{{ $juz }}">
                                    <div class="fw-bold">{{ $juz }}</div>
                                    <small class="d-none d-md-block">{{ \App\Models\QuranProgress::JUZ_NAMES[$juz] }}</small>
                                    @if($isCompleted)
                                        <i class="ri-check-line"></i>
                                    @elseif($isCurrent)
                                        <i class="ri-bookmark-line"></i>
                                    @endif
                                </div>
                            </div>

                            {{-- Modal لتفاصيل الجزء --}}
                            <div class="modal fade" id="juzModal{{ $juz }}" tabindex="-1">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">الجزء {{ $juz }} - {{ \App\Models\QuranProgress::JUZ_NAMES[$juz] }}</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                        </div>
                                        <div class="modal-body">
                                            @if($juzInfo)
                                                <p class="text-muted">الصفحات: {{ $juzInfo['start_page'] }} - {{ $juzInfo['end_page'] }}</p>
                                                <h6>السور في هذا الجزء:</h6>
                                                <div class="list-group">
                                                    @foreach($juzInfo['surahs'] as $surah)
                                                        <div class="list-group-item d-flex justify-content-between align-items-center">
                                                            <div>
                                                                <span class="badge bg-primary me-2">{{ $surah['number'] }}</span>
                                                                <strong>{{ $surah['name'] }}</strong>
                                                                <small class="text-muted ms-2">{{ $surah['english'] }}</small>
                                                            </div>
                                                            <span class="badge bg-light text-dark">{{ $surah['ayahs'] }} آية</span>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            @endif
                                        </div>
                                        <div class="modal-footer">
                                            <form action="{{ route('decision-os.quran.update-position') }}" method="POST">
                                                @csrf
                                                <input type="hidden" name="current_juz" value="{{ $juz }}">
                                                <input type="hidden" name="current_page" value="{{ $juzInfo['start_page'] ?? 1 }}">
                                                <button type="submit" class="btn btn-primary">
                                                    <i class="ri-bookmark-line"></i> الانتقال لهذا الجزء
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endfor
                    </div>
                </div>

                {{-- عرض السور --}}
                <div id="surahGrid" style="display: none;">
                    {{-- البحث في السور --}}
                    <div class="mb-3">
                        <input type="text" class="form-control" id="surahSearch" placeholder="🔍 ابحث عن سورة...">
                    </div>
                    <div class="row" id="surahList">
                        @foreach($surahs as $number => $surah)
                            <div class="col-lg-3 col-md-4 col-6 mb-2 surah-item" data-name="{{ $surah['name'] }} {{ $surah['english'] }}">
                                <div class="p-2 rounded bg-light text-center surah-card" style="cursor: pointer;"
                                     data-bs-toggle="modal" data-bs-target="#surahModal{{ $number }}">
                                    <span class="badge bg-primary">{{ $number }}</span>
                                    <div class="fw-bold mt-1">{{ $surah['name'] }}</div>
                                    <small class="text-muted">{{ $surah['english'] }}</small>
                                    <div class="small">
                                        <span class="badge bg-{{ $surah['type'] === 'meccan' ? 'warning' : 'info' }}">
                                            {{ $surah['type'] === 'meccan' ? 'مكية' : 'مدنية' }}
                                        </span>
                                        <span class="text-muted">{{ $surah['ayahs'] }} آية</span>
                                    </div>
                                </div>
                            </div>

                            {{-- Modal لتفاصيل السورة --}}
                            <div class="modal fade" id="surahModal{{ $number }}" tabindex="-1">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">سورة {{ $surah['name'] }}</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                        </div>
                                        <div class="modal-body text-center">
                                            <div class="display-6 text-primary mb-3">{{ $number }}</div>
                                            <h3>{{ $surah['name'] }}</h3>
                                            <p class="text-muted">{{ $surah['english'] }}</p>
                                            <div class="d-flex justify-content-center gap-3">
                                                <span class="badge bg-{{ $surah['type'] === 'meccan' ? 'warning' : 'info' }} fs-6">
                                                    {{ $surah['type'] === 'meccan' ? 'مكية' : 'مدنية' }}
                                                </span>
                                                <span class="badge bg-secondary fs-6">{{ $surah['ayahs'] }} آية</span>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">إغلاق</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('js')
<script>
// الأزرار السريعة لتسجيل القراءة
document.querySelectorAll('.quick-log').forEach(btn => {
    btn.addEventListener('click', function() {
        const pages = this.dataset.pages;
        const form = document.createElement('form');
        form.method = 'POST';
        form.action = '{{ route("decision-os.quran.log-reading") }}';
        form.innerHTML = `
            @csrf
            <input type="hidden" name="pages" value="${pages}">
        `;
        document.body.appendChild(form);
        form.submit();
    });
});

// التبديل بين عرض الأجزاء والسور
document.getElementById('viewJuz').addEventListener('click', function() {
    document.getElementById('juzGrid').style.display = 'block';
    document.getElementById('surahGrid').style.display = 'none';
    this.classList.add('active');
    document.getElementById('viewSurah').classList.remove('active');
});

document.getElementById('viewSurah').addEventListener('click', function() {
    document.getElementById('juzGrid').style.display = 'none';
    document.getElementById('surahGrid').style.display = 'block';
    this.classList.add('active');
    document.getElementById('viewJuz').classList.remove('active');
});

// البحث في السور
document.getElementById('surahSearch').addEventListener('input', function() {
    const searchTerm = this.value.toLowerCase();
    document.querySelectorAll('.surah-item').forEach(item => {
        const name = item.dataset.name.toLowerCase();
        if (name.includes(searchTerm)) {
            item.style.display = 'block';
        } else {
            item.style.display = 'none';
        }
    });
});
</script>
@endsection
