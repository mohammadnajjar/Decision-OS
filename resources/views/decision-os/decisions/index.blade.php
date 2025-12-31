@extends('partials.layouts.master')

@section('title', 'Decision OS | سجل القرارات')
@section('title-sub', 'Decision OS')
@section('pagetitle', 'سجل القرارات')

@section('content')
<div id="layout-wrapper">
    <div class="container-fluid">

        {{-- Header --}}
        <div class="row mb-4">
            <div class="col-12">
                <div class="d-flex align-items-center justify-content-between">
                    <div>
                        <h4 class="mb-1">سجل القرارات</h4>
                        <p class="text-muted mb-0">تتبع قراراتك وتعلّم منها</p>
                    </div>
                    <a href="{{ route('decision-os.decisions.create') }}" class="btn btn-primary">
                        <i class="ri-add-line me-1"></i> قرار جديد
                    </a>
                </div>
            </div>
        </div>

        {{-- Stats Cards --}}
        <div class="row mb-4">
            <div class="col-md-4">
                <div class="card bg-primary text-white">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between">
                            <div>
                                <h3 class="mb-0">{{ $winRate }}%</h3>
                                <span>نسبة الفوز</span>
                            </div>
                            <i class="ri-trophy-line fs-1 opacity-50"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card bg-warning text-dark">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between">
                            <div>
                                <h3 class="mb-0">{{ $pendingReview->count() }}</h3>
                                <span>بانتظار المراجعة</span>
                            </div>
                            <i class="ri-time-line fs-1 opacity-50"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card bg-info text-white">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between">
                            <div>
                                <h3 class="mb-0">{{ $decisions->total() }}</h3>
                                <span>إجمالي القرارات</span>
                            </div>
                            <i class="ri-git-commit-line fs-1 opacity-50"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Pending Reviews Alert --}}
        @if($pendingReview->count() > 0)
        <div class="alert alert-warning border-warning mb-4">
            <div class="d-flex align-items-center">
                <i class="ri-alarm-warning-line fs-4 me-3"></i>
                <div class="flex-grow-1">
                    <strong>{{ $pendingReview->count() }} قرار بانتظار المراجعة!</strong>
                    <p class="mb-0">حان وقت تقييم هذه القرارات</p>
                </div>
            </div>
        </div>
        @endif

        {{-- Decisions List --}}
        <div class="card">
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-hover mb-0">
                        <thead class="bg-light">
                            <tr>
                                <th>القرار</th>
                                <th>السياق</th>
                                <th>تاريخ المراجعة</th>
                                <th>النتيجة</th>
                                <th>الإجراء</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($decisions as $decision)
                            <tr>
                                <td>
                                    <strong>{{ $decision->title }}</strong>
                                    <small class="d-block text-muted">{{ $decision->created_at->diffForHumans() }}</small>
                                </td>
                                <td>
                                    @switch($decision->context)
                                        @case('financial')
                                            <span class="badge bg-success-subtle text-success">مالي</span>
                                            @break
                                        @case('work')
                                            <span class="badge bg-primary-subtle text-primary">عمل</span>
                                            @break
                                        @case('client')
                                            <span class="badge bg-info-subtle text-info">عميل</span>
                                            @break
                                        @case('personal')
                                            <span class="badge bg-secondary-subtle text-secondary">شخصي</span>
                                            @break
                                        @case('business')
                                            <span class="badge bg-warning-subtle text-warning">أعمال</span>
                                            @break
                                    @endswitch
                                </td>
                                <td>
                                    @if($decision->review_date)
                                        @if($decision->review_date->isPast() && $decision->result === 'pending')
                                            <span class="text-danger">
                                                <i class="ri-alarm-warning-line"></i>
                                                {{ $decision->review_date->format('d/m/Y') }}
                                            </span>
                                        @else
                                            {{ $decision->review_date->format('d/m/Y') }}
                                        @endif
                                    @else
                                        <span class="text-muted">-</span>
                                    @endif
                                </td>
                                <td>
                                    @switch($decision->result)
                                        @case('win')
                                            <span class="badge bg-success">
                                                <i class="ri-checkbox-circle-line me-1"></i> فوز
                                            </span>
                                            @break
                                        @case('lose')
                                            <span class="badge bg-danger">
                                                <i class="ri-close-circle-line me-1"></i> خسارة
                                            </span>
                                            @break
                                        @default
                                            <span class="badge bg-secondary">معلّق</span>
                                    @endswitch
                                </td>
                                <td>
                                    @if($decision->result === 'pending')
                                        <a href="{{ route('decision-os.decisions.review', $decision) }}"
                                           class="btn btn-sm btn-outline-primary">
                                            <i class="ri-edit-line"></i> راجع
                                        </a>
                                    @else
                                        <a href="{{ route('decision-os.decisions.show', $decision) }}"
                                           class="btn btn-sm btn-outline-secondary">
                                            <i class="ri-eye-line"></i> عرض
                                        </a>
                                    @endif
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="5" class="text-center py-5">
                                    <i class="ri-git-commit-line fs-1 text-muted"></i>
                                    <p class="text-muted mt-2">لا توجد قرارات مسجلة</p>
                                </td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        {{-- Pagination --}}
        @if($decisions->hasPages())
        <div class="d-flex justify-content-center mt-4">
            {{ $decisions->links() }}
        </div>
        @endif

    </div>
</div>
@endsection
