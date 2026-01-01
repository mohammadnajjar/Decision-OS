@extends('partials.layouts.master')

@section('title', 'سجل الدخل | Decision OS')
@section('pagetitle', 'سجل الدخل')

@section('content')
<div class="container-fluid">
    <!-- Summary Cards -->
    <div class="row mb-4">
        <div class="col-md-6">
            <div class="card border-0 shadow-sm">
                <div class="card-body text-center">
                    <div class="fs-12 text-muted mb-1">دخل هذا الشهر</div>
                    <div class="fs-3 fw-bold text-success">${{ number_format($monthTotal, 2) }}</div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card border-0 shadow-sm">
                <div class="card-body text-center">
                    <div class="fs-12 text-muted mb-1">إجمالي الدخل</div>
                    <div class="fs-3 fw-bold text-primary">${{ number_format($totalSinceStart, 2) }}</div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <!-- Add Form -->
        <div class="col-lg-4">
            <div class="card border-0 shadow-sm">
                <div class="card-header bg-success text-white">
                    <h6 class="mb-0"><i class="bi bi-plus-circle me-2"></i>إضافة دخل</h6>
                </div>
                <div class="card-body">
                    <form action="{{ route('decision-os.incomes.store') }}" method="POST">
                        @csrf

                        <div class="mb-3">
                            <label class="form-label">المبلغ</label>
                            <div class="input-group">
                                <span class="input-group-text">$</span>
                                <input type="number" step="0.01" name="amount" class="form-control form-control-lg" placeholder="0.00" required>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">التاريخ</label>
                            <input type="date" name="date" class="form-control" value="{{ today()->toDateString() }}" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">المصدر</label>
                            <input type="text" name="source" class="form-control" placeholder="مثال: راتب، مشروع X">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">ملاحظة (اختياري)</label>
                            <input type="text" name="note" class="form-control" placeholder="تفاصيل إضافية">
                        </div>

                        <button type="submit" class="btn btn-success w-100">
                            <i class="bi bi-check-lg me-1"></i> إضافة
                        </button>
                    </form>
                </div>
            </div>
        </div>

        <!-- Incomes List -->
        <div class="col-lg-8">
            <div class="card border-0 shadow-sm">
                <div class="card-header">
                    <h6 class="mb-0">سجل الدخل</h6>
                </div>
                <div class="card-body p-0">
                    @if($incomes->count() > 0)
                        <div class="table-responsive">
                            <table class="table table-hover mb-0">
                                <thead class="table-light">
                                    <tr>
                                        <th>التاريخ</th>
                                        <th>المصدر</th>
                                        <th>المبلغ</th>
                                        <th>ملاحظة</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($incomes as $income)
                                        <tr>
                                            <td>{{ $income->date->format('Y-m-d') }}</td>
                                            <td>{{ $income->source ?? '-' }}</td>
                                            <td class="fw-bold text-success">${{ number_format($income->amount, 2) }}</td>
                                            <td class="text-muted">{{ $income->note ?? '-' }}</td>
                                            <td>
                                                <form action="{{ route('decision-os.incomes.destroy', $income) }}" method="POST" class="d-inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-link text-danger p-0" onclick="return confirm('حذف هذا الدخل؟')">
                                                        <i class="bi bi-trash"></i>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="p-3">
                            {{ $incomes->links() }}
                        </div>
                    @else
                        <div class="text-center py-5 text-muted">
                            <i class="bi bi-cash-stack fs-1"></i>
                            <p class="mt-2">لا يوجد دخل مسجل بعد</p>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
