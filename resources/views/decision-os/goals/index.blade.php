@extends('partials.layouts.master')

@section('title', 'أهداف السنة | Decision OS')
@section('pagetitle', 'أهداف السنة ' . $year)

@section('content')
<div class="container-fluid">
    <!-- Header -->
    <div class="row mb-4">
        <div class="col-12">
            <div class="d-flex align-items-center justify-content-between flex-wrap gap-3">
                <div>
                    <h4 class="mb-1">أهداف السنة {{ $year }}</h4>
                    <p class="text-muted mb-0">حدد أهدافك وتابع تقدمك</p>
                </div>
                <div class="d-flex gap-2 flex-wrap">
                    <select class="form-select form-select-sm" onchange="updateFilters('year', this.value)">
                        @foreach($years as $y)
                            <option value="{{ $y }}" {{ $year == $y ? 'selected' : '' }}>{{ $y }}</option>
                        @endforeach
                    </select>
                    <select class="form-select form-select-sm" onchange="updateFilters('month', this.value)">
                        <option value="">كل الشهور</option>
                        @foreach($months as $m => $label)
                            <option value="{{ $m }}" {{ $month == $m ? 'selected' : '' }}>{{ $label }}</option>
                        @endforeach
                    </select>
                    <a href="{{ route('decision-os.goals.create') }}" class="btn btn-primary btn-sm">
                        <i class="bi bi-plus-lg me-1"></i> هدف جديد
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Stats -->
    <div class="row mb-4">
        <div class="col-md-3">
            <div class="card border-0 shadow-sm text-center">
                <div class="card-body">
                    <div class="fs-3 fw-bold text-primary">{{ $stats['total'] }}</div>
                    <div class="text-muted">إجمالي الأهداف</div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card border-0 shadow-sm text-center">
                <div class="card-body">
                    <div class="fs-3 fw-bold text-success">{{ $stats['completed'] }}</div>
                    <div class="text-muted">مكتملة</div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card border-0 shadow-sm text-center">
                <div class="card-body">
                    <div class="fs-3 fw-bold text-info">{{ $stats['in_progress'] }}</div>
                    <div class="text-muted">قيد التنفيذ</div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card border-0 shadow-sm text-center">
                <div class="card-body">
                    <div class="fs-3 fw-bold text-warning">{{ $stats['avg_progress'] }}%</div>
                    <div class="text-muted">متوسط التقدم</div>
                </div>
            </div>
        </div>
    </div>

    <!-- Category Filter -->
    <div class="card mb-4">
        <div class="card-body py-3">
            <div class="d-flex flex-wrap gap-2">
                <button onclick="updateFilters('category', '')"
                   class="btn btn-sm {{ !$category ? 'btn-primary' : 'btn-outline-primary' }}">
                    الكل
                </button>
                @foreach($categories as $key => $label)
                    <button onclick="updateFilters('category', '{{ $key }}')"
                       class="btn btn-sm {{ $category === $key ? 'btn-primary' : 'btn-outline-primary' }}">
                        {{ $label }}
                    </button>
                @endforeach
            </div>
        </div>
    </div>

    <!-- Goals by Category -->
    @forelse($goals as $cat => $categoryGoals)
        <div class="card mb-4 border-0 shadow-sm">
            <div class="card-header bg-light">
                <h6 class="mb-0">
                    @switch($cat)
                        @case('personal') 🎯 @break
                        @case('financial') 💰 @break
                        @case('health') 💪 @break
                        @case('career') 💼 @break
                        @case('learning') 📚 @break
                        @case('relationships') 🤝 @break
                        @default 📌
                    @endswitch
                    {{ $categories[$cat] ?? $cat }}
                    <span class="badge bg-secondary ms-2">{{ $categoryGoals->count() }}</span>
                </h6>
            </div>
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-hover mb-0">
                        <thead class="table-light">
                            <tr>
                                <th style="width: 40%">الهدف</th>
                                <th style="width: 20%">الحالة</th>
                                <th style="width: 25%">التقدم</th>
                                <th style="width: 15%"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($categoryGoals as $goal)
                                <tr>
                                    <td>
                                        <div class="fw-medium">{{ $goal->title }}</div>
                                        @if($goal->description)
                                            <small class="text-muted">{{ Str::limit($goal->description, 50) }}</small>
                                        @endif
                                    </td>
                                    <td>
                                        <span class="badge bg-{{ $goal->status_color }}">
                                            {{ $goal->status_label }}
                                        </span>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center gap-2">
                                            <div class="progress flex-grow-1" style="height: 8px;">
                                                <div class="progress-bar bg-{{ $goal->progress >= 100 ? 'success' : ($goal->progress > 50 ? 'info' : 'warning') }}"
                                                     style="width: {{ $goal->progress }}%"></div>
                                            </div>
                                            <span class="text-muted fs-12">{{ $goal->progress }}%</span>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex gap-1">
                                            <a href="{{ route('decision-os.goals.edit', $goal) }}" class="btn btn-sm btn-link p-0">
                                                <i class="bi bi-pencil"></i>
                                            </a>
                                            <form action="{{ route('decision-os.goals.destroy', $goal) }}" method="POST" class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-link text-danger p-0" onclick="return confirm('حذف هذا الهدف؟')">
                                                    <i class="bi bi-trash"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    @empty
        <div class="card border-0 shadow-sm">
            <div class="card-body text-center py-5">
                <i class="bi bi-bullseye fs-1 text-muted"></i>
                <p class="mt-3 text-muted">لا توجد أهداف لهذه السنة</p>
                <a href="{{ route('decision-os.goals.create') }}" class="btn btn-primary">
                    <i class="bi bi-plus-lg me-1"></i> أضف هدفك الأول
                </a>
            </div>
        </div>
    @endforelse
</div>

@section('js')
<script>
function updateFilters(key, value) {
    const url = new URL(window.location.href);
    if (value) {
        url.searchParams.set(key, value);
    } else {
        url.searchParams.delete(key);
    }
    window.location.href = url.toString();
}
</script>
@endsection
@endsection
