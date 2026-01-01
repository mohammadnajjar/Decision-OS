@extends('partials.layouts.master')

@section('title', 'إضافة مصروف | Decision OS')
@section('pagetitle', 'إضافة مصروف')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <div class="card border-0 shadow-sm">
                <div class="card-header">
                    <h6 class="mb-0"><i class="bi bi-plus-circle me-2"></i>إضافة مصروف جديد</h6>
                </div>
                <div class="card-body">
                    <form action="{{ route('decision-os.expenses.store') }}" method="POST">
                        @csrf

                        <div class="mb-3">
                            <label class="form-label">المبلغ <span class="text-danger">*</span></label>
                            <div class="input-group">
                                <span class="input-group-text">{{ auth()->user()->currency }}</span>
                                <input type="number" step="0.01" name="amount" class="form-control form-control-lg" placeholder="0.00" required value="{{ old('amount') }}">
                            </div>
                            @error('amount')
                                <div class="text-danger fs-12 mt-1">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label">الحساب <span class="text-danger">*</span></label>
                            <select name="account_id" class="form-select" required>
                                <option value="">اختر الحساب...</option>
                                @foreach($accounts as $account)
                                    <option value="{{ $account->id }}" {{ old('account_id') == $account->id || (!old('account_id') && $account->is_default) ? 'selected' : '' }}>
                                        @if($account->icon)
                                            <i class="{{ $account->icon }}"></i>
                                        @endif
                                        {{ $account->name }} ({{ $account->currency }} {{ number_format($account->balance, 2) }})
                                    </option>
                                @endforeach
                            </select>
                            @error('account_id')
                                <div class="text-danger fs-12 mt-1">{{ $message }}</div>
                            @enderror
                            @if($accounts->isEmpty())
                                <div class="alert alert-warning mt-2">
                                    لا توجد حسابات مالية. <a href="{{ route('decision-os.accounts.create') }}">أضف حساباً الآن</a>
                                </div>
                            @endif
                        </div>

                        <div class="mb-3">
                            <label class="form-label">الفئة <span class="text-danger">*</span></label>
                            <select name="expense_category_id" class="form-select" required>
                                <option value="">اختر الفئة...</option>
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}" {{ old('expense_category_id') == $category->id ? 'selected' : '' }}>
                                        {{ $category->icon }} {{ $category->name }}
                                    </option>
                                @endforeach
                            </select>
                            @error('expense_category_id')
                                <div class="text-danger fs-12 mt-1">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label">التاريخ <span class="text-danger">*</span></label>
                            <input type="date" name="date" class="form-control" required value="{{ old('date', today()->toDateString()) }}">
                            @error('date')
                                <div class="text-danger fs-12 mt-1">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label">طريقة الدفع</label>
                            <select name="payment_method" class="form-select">
                                <option value="cash" {{ old('payment_method') == 'cash' ? 'selected' : '' }}>نقدي</option>
                                <option value="card" {{ old('payment_method') == 'card' ? 'selected' : '' }}>بطاقة</option>
                                <option value="other" {{ old('payment_method') == 'other' ? 'selected' : '' }}>أخرى</option>
                            </select>
                        </div>

                        <div class="mb-4">
                            <label class="form-label">ملاحظة (اختياري)</label>
                            <input type="text" name="note" class="form-control" placeholder="مثال: غداء مع الفريق" value="{{ old('note') }}">
                        </div>

                        <div class="d-flex gap-2">
                            <button type="submit" class="btn btn-primary">
                                <i class="bi bi-check-lg me-1"></i> حفظ
                            </button>
                            <a href="{{ route('decision-os.expenses.index') }}" class="btn btn-outline-secondary">
                                إلغاء
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
