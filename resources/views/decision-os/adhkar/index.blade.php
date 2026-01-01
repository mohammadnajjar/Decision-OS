@extends('partials.layouts.master')

@section('title', 'الأذكار | Decision OS')
@section('title-sub', 'Decision OS')
@section('pagetitle', 'أذكار الصباح والمساء')

@section('css')
<style>
.dhikr-card {
    transition: all 0.3s ease;
    border-right: 4px solid transparent;
}
.dhikr-card:hover {
    transform: translateY(-2px);
    box-shadow: 0 4px 15px rgba(0,0,0,0.1);
}
.dhikr-card.completed {
    opacity: 0.6;
    border-right-color: #198754;
}
.dhikr-text {
    font-size: 1.3rem;
    line-height: 2;
    font-family: 'Amiri', 'Traditional Arabic', serif;
}
.repeat-counter {
    font-size: 2rem;
    font-weight: bold;
    cursor: pointer;
    user-select: none;
}
.repeat-counter:active {
    transform: scale(0.95);
}
</style>
@endsection

@section('content')

{{-- Header --}}
<div class="row mb-4">
    <div class="col-12">
        <div class="card bg-{{ $adhkarData['color'] }}-subtle border-0">
            <div class="card-body text-center py-4">
                <i class="{{ $adhkarData['icon'] }} display-3 text-{{ $adhkarData['color'] }} mb-3"></i>
                <h2 class="mb-2">{{ $adhkarData['title'] }}</h2>
                <p class="text-muted mb-0">
                    @if($adhkarData['type'] === 'morning')
                        من بعد صلاة الفجر حتى طلوع الشمس
                    @else
                        من بعد صلاة العصر حتى غروب الشمس
                    @endif
                </p>
                <div class="mt-3">
                    <span class="badge bg-{{ $adhkarData['color'] }} fs-6">
                        <span id="completedCount">0</span> / {{ count($adhkarData['adhkar']) }} ذكر مكتمل
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- شريط التقدم --}}
<div class="row mb-4">
    <div class="col-12">
        <div class="progress" style="height: 10px;">
            <div class="progress-bar bg-{{ $adhkarData['color'] }}" id="progressBar" role="progressbar" style="width: 0%"></div>
        </div>
    </div>
</div>

{{-- قائمة الأذكار --}}
<div class="row">
    @foreach($adhkarData['adhkar'] as $index => $dhikr)
    <div class="col-12 mb-3">
        <div class="card dhikr-card" id="dhikr-{{ $index }}">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col-lg-8 col-md-7">
                        <p class="dhikr-text mb-3">{{ $dhikr['text'] }}</p>
                        <div class="d-flex flex-wrap gap-2">
                            <span class="badge bg-secondary">{{ $dhikr['source'] }}</span>
                            @if(isset($dhikr['benefit']))
                                <span class="badge bg-success-subtle text-success">
                                    <i class="ri-heart-line me-1"></i>{{ $dhikr['benefit'] }}
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-5 text-center mt-3 mt-md-0">
                        <div class="repeat-counter text-{{ $adhkarData['color'] }}"
                             data-index="{{ $index }}"
                             data-max="{{ $dhikr['repeat'] }}"
                             data-current="0"
                             onclick="countDhikr(this)">
                            <span class="current-count">0</span> / {{ $dhikr['repeat'] }}
                        </div>
                        <small class="text-muted d-block mt-1">اضغط للعد</small>
                        @if($dhikr['repeat'] > 1)
                            <button class="btn btn-sm btn-outline-{{ $adhkarData['color'] }} mt-2"
                                    onclick="completeAll({{ $index }}, {{ $dhikr['repeat'] }})">
                                <i class="ri-check-double-line"></i> إكمال الكل
                            </button>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>

{{-- أزرار الإجراءات --}}
<div class="row mt-4">
    <div class="col-12 text-center">
        <button class="btn btn-outline-danger me-2" onclick="resetAll()">
            <i class="ri-refresh-line"></i> إعادة تعيين الكل
        </button>
        <a href="{{ route('decision-os.dashboard') }}" class="btn btn-outline-secondary">
            <i class="ri-arrow-right-line"></i> العودة للوحة التحكم
        </a>
    </div>
</div>

{{-- ذكر عشوائي --}}
<div class="row mt-4">
    <div class="col-12">
        <div class="card border-0 bg-light">
            <div class="card-body text-center">
                <h6 class="text-muted mb-3"><i class="ri-lightbulb-line me-2"></i>ذكر اليوم</h6>
                <p class="dhikr-text text-primary mb-2">{{ $randomDhikr['text'] }}</p>
                <small class="text-muted">{{ $randomDhikr['source'] }} | التكرار: {{ $randomDhikr['repeat'] }} مرة</small>
            </div>
        </div>
    </div>
</div>

@endsection

@section('js')
<script>
let completedDhikrs = [];
const totalDhikrs = {{ count($adhkarData['adhkar']) }};

function countDhikr(element) {
    const index = parseInt(element.dataset.index);
    const max = parseInt(element.dataset.max);
    let current = parseInt(element.dataset.current);

    if (current < max) {
        current++;
        element.dataset.current = current;
        element.querySelector('.current-count').textContent = current;

        if (current === max) {
            markAsCompleted(index);
        }
    }

    updateProgress();
}

function completeAll(index, max) {
    const element = document.querySelector(`[data-index="${index}"]`);
    element.dataset.current = max;
    element.querySelector('.current-count').textContent = max;
    markAsCompleted(index);
    updateProgress();
}

function markAsCompleted(index) {
    if (!completedDhikrs.includes(index)) {
        completedDhikrs.push(index);
    }
    const card = document.getElementById(`dhikr-${index}`);
    card.classList.add('completed');

    // تأثير الاكتمال
    const counter = card.querySelector('.repeat-counter');
    counter.innerHTML = '<i class="ri-check-double-line"></i>';
}

function updateProgress() {
    const percentage = (completedDhikrs.length / totalDhikrs) * 100;
    document.getElementById('progressBar').style.width = percentage + '%';
    document.getElementById('completedCount').textContent = completedDhikrs.length;

    // حفظ التقدم في localStorage
    localStorage.setItem('adhkar_{{ $adhkarData['type'] }}_' + new Date().toDateString(), JSON.stringify(completedDhikrs));

    // إذا اكتملت جميع الأذكار
    if (completedDhikrs.length === totalDhikrs) {
        showCompletionMessage();
    }
}

function resetAll() {
    if (confirm('هل تريد إعادة تعيين جميع الأذكار؟')) {
        completedDhikrs = [];
        document.querySelectorAll('.repeat-counter').forEach(el => {
            el.dataset.current = 0;
            el.querySelector('.current-count').textContent = '0';
        });
        document.querySelectorAll('.dhikr-card').forEach(card => {
            card.classList.remove('completed');
        });
        updateProgress();
        localStorage.removeItem('adhkar_{{ $adhkarData['type'] }}_' + new Date().toDateString());
    }
}

function showCompletionMessage() {
    // يمكن استخدام SweetAlert2 إذا كان متاحاً
    if (typeof Swal !== 'undefined') {
        Swal.fire({
            icon: 'success',
            title: 'بارك الله فيك!',
            text: 'أكملت جميع الأذكار 🤲',
            confirmButtonText: 'الحمد لله'
        });
    } else {
        alert('بارك الله فيك! أكملت جميع الأذكار 🤲');
    }
}

// تحميل التقدم المحفوظ عند فتح الصفحة
document.addEventListener('DOMContentLoaded', function() {
    const saved = localStorage.getItem('adhkar_{{ $adhkarData['type'] }}_' + new Date().toDateString());
    if (saved) {
        const savedIndices = JSON.parse(saved);
        savedIndices.forEach(index => {
            const element = document.querySelector(`[data-index="${index}"]`);
            if (element) {
                const max = parseInt(element.dataset.max);
                element.dataset.current = max;
                element.querySelector('.current-count').textContent = max;
                markAsCompleted(index);
            }
        });
        updateProgress();
    }
});
</script>
@endsection
