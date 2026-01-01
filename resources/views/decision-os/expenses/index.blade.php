@extends('partials.layouts.master')

@section('title', 'المصروفات اليومية | Decision OS')
@section('pagetitle', 'المصروفات اليومية')

@section('content')
<div class="container-fluid">
    <!-- Summary Cards -->
    <div class="row mb-4">
        <div class="col-md-3">
            <div class="card border-0 shadow-sm">
                <div class="card-body text-center">
                    <div class="fs-12 text-muted mb-1">اليوم</div>
                    <div class="fs-4 fw-bold text-primary">${{ number_format($todayTotal, 2) }}</div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card border-0 shadow-sm">
                <div class="card-body text-center">
                    <div class="fs-12 text-muted mb-1">هذا الأسبوع</div>
                    <div class="fs-4 fw-bold text-info">${{ number_format($weekTotal, 2) }}</div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card border-0 shadow-sm">
                <div class="card-body text-center">
                    <div class="fs-12 text-muted mb-1">هذا الشهر</div>
                    <div class="fs-4 fw-bold text-warning">${{ number_format($monthTotal, 2) }}</div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card border-0 shadow-sm">
                <div class="card-body text-center">
                    <div class="fs-12 text-muted mb-1">أعلى فئة هذا الأسبوع</div>
                    @if($topCategory)
                        <div class="fs-5 fw-bold">
                            {{ $topCategory['category']->icon }} {{ $topCategory['category']->name }}
                        </div>
                        <div class="fs-12 text-muted">${{ number_format($topCategory['total'], 2) }}</div>
                    @else
                        <div class="text-muted">-</div>
                    @endif
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <!-- Quick Add Form -->
        <div class="col-lg-4">
            <div class="card border-0 shadow-sm">
                <div class="card-header bg-primary text-white">
                    <h6 class="mb-0"><i class="bi bi-plus-circle me-2"></i>إضافة مصروف سريع</h6>
                </div>
                <div class="card-body">
                    <form action="{{ route('decision-os.expenses.store') }}" method="POST">
                        @csrf
                        <input type="hidden" name="date" value="{{ today()->toDateString() }}">

                        <div class="mb-3">
                            <label class="form-label">المبلغ</label>
                            <div class="input-group">
                                <span class="input-group-text">{{ auth()->user()->currency }}</span>
                                <input type="number" step="0.01" name="amount" class="form-control form-control-lg" placeholder="0.00" required>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">الفئة</label>
                            <select name="expense_category_id" class="form-select" required>
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->icon }} {{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">ملاحظة (اختياري)</label>
                            <input type="text" name="note" class="form-control" placeholder="مثال: قهوة الصباح">
                        </div>

                        <button type="submit" class="btn btn-primary w-100">
                            <i class="bi bi-check-lg me-1"></i> إضافة
                        </button>
                    </form>
                </div>
            </div>
        </div>

        <!-- Expenses List -->
        <div class="col-lg-8">
            <div class="card border-0 shadow-sm">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h6 class="mb-0">سجل المصروفات</h6>
                    <a href="{{ route('decision-os.expense-categories.index') }}" class="btn btn-sm btn-outline-secondary">
                        <i class="bi bi-gear me-1"></i> إدارة الفئات
                    </a>
                </div>
                <div class="card-body p-0">
                    @if($expenses->count() > 0)
                        <div class="table-responsive">
                            <table class="table table-hover mb-0">
                                <thead class="table-light">
                                    <tr>
                                        <th>التاريخ</th>
                                        <th>الفئة</th>
                                        <th>المبلغ</th>
                                        <th>ملاحظة</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($expenses as $expense)
                                        <tr>
                                            <td>{{ $expense->date->format('Y-m-d') }}</td>
                                            <td>
                                                <span class="badge bg-light text-dark">
                                                    {{ $expense->category->icon ?? '📁' }} {{ $expense->category->name ?? 'غير محدد' }}
                                                </span>
                                            </td>
                                            <td class="fw-bold text-danger">${{ number_format($expense->amount, 2) }}</td>
                                            <td class="text-muted">{{ $expense->note ?? '-' }}</td>
                                            <td>
                                                <form action="{{ route('decision-os.expenses.destroy', $expense) }}" method="POST" class="d-inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-link text-danger p-0" onclick="return confirm('حذف هذا المصروف؟')">
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
                            {{ $expenses->links() }}
                        </div>
                    @else
                        <div class="text-center py-5 text-muted">
                            <i class="bi bi-wallet2 fs-1"></i>
                            <p class="mt-2">لا توجد مصروفات مسجلة بعد</p>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
