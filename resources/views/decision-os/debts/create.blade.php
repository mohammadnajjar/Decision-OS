@extends('partials.layouts.master')
@section('title', ($type === 'payable' ? __('app.debts.add_payable') : __('app.debts.add_receivable')) . ' | Decision OS')
@section('title-sub', 'Decision OS')
@section('pagetitle', $type === 'payable' ? __('app.debts.add_payable') : __('app.debts.add_receivable'))

@section('content')
<div class="row">
    <div class="col-lg-8 mx-auto">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">
                    @if($type === 'payable')
                    <i class="ri-arrow-up-circle-line text-danger me-2"></i>
                    {{ __('app.debts.add_payable') }}
                    @else
                    <i class="ri-arrow-down-circle-line text-success me-2"></i>
                    {{ __('app.debts.add_receivable') }}
                    @endif
                </h5>
            </div>

            <div class="card-body">
                <form action="{{ route('decision-os.debts.store') }}" method="POST">
                    @csrf
                    <input type="hidden" name="type" value="{{ $type }}">

                    <!-- Party Information -->
                    <div class="row">
                        <div class="col-md-8">
                            <div class="mb-3">
                                <label class="form-label required">
                                    {{ $type === 'payable' ? __('app.debts.creditor_name') : __('app.debts.debtor_name') }}
                                </label>
                                <input type="text" name="party_name" class="form-control @error('party_name') is-invalid @enderror"
                                    value="{{ old('party_name') }}" required placeholder="{{ __('app.debts.party_name_placeholder') }}">
                                @error('party_name')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="mb-3">
                                <label class="form-label">{{ __('app.debts.contact') }}</label>
                                <input type="text" name="party_contact" class="form-control @error('party_contact') is-invalid @enderror"
                                    value="{{ old('party_contact') }}" placeholder="{{ __('app.debts.contact_placeholder') }}">
                                @error('party_contact')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <!-- Amount & Currency -->
                    <div class="row">
                        <div class="col-md-8">
                            <div class="mb-3">
                                <label class="form-label required">{{ __('app.debts.total_amount') }}</label>
                                <input type="number" step="0.01" name="total_amount" id="total_amount" class="form-control @error('total_amount') is-invalid @enderror"
                                    value="{{ old('total_amount') }}" required placeholder="0.00">
                                @error('total_amount')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="mb-3">
                                <label class="form-label">{{ __('app.debts.currency') }}</label>
                                <input type="text" name="currency" class="form-control @error('currency') is-invalid @enderror"
                                    value="{{ old('currency', auth()->user()->currency) }}" placeholder="AED">
                                @error('currency')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <!-- Dates -->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label required">{{ __('app.debts.start_date') }}</label>
                                <input type="date" name="start_date" class="form-control @error('start_date') is-invalid @enderror"
                                    value="{{ old('start_date', date('Y-m-d')) }}" required>
                                @error('start_date')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">{{ __('app.debts.due_date') }}</label>
                                <input type="date" name="due_date" class="form-control @error('due_date') is-invalid @enderror"
                                    value="{{ old('due_date') }}">
                                @error('due_date')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <!-- Repayment Schedule -->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label required">{{ __('app.debts.repayment_frequency') }}</label>
                                <select name="repayment_frequency" id="repayment_frequency" class="form-select @error('repayment_frequency') is-invalid @enderror" required>
                                    <option value="one_time" {{ old('repayment_frequency') === 'one_time' ? 'selected' : '' }}>
                                        {{ __('app.debts.one_time') }}
                                    </option>
                                    <option value="weekly" {{ old('repayment_frequency') === 'weekly' ? 'selected' : '' }}>
                                        {{ __('app.debts.weekly') }}
                                    </option>
                                    <option value="biweekly" {{ old('repayment_frequency') === 'biweekly' ? 'selected' : '' }}>
                                        {{ __('app.debts.biweekly') }}
                                    </option>
                                    <option value="monthly" {{ old('repayment_frequency', 'monthly') === 'monthly' ? 'selected' : '' }}>
                                        {{ __('app.debts.monthly') }}
                                    </option>
                                    <option value="quarterly" {{ old('repayment_frequency') === 'quarterly' ? 'selected' : '' }}>
                                        {{ __('app.debts.quarterly') }}
                                    </option>
                                    <option value="yearly" {{ old('repayment_frequency') === 'yearly' ? 'selected' : '' }}>
                                        {{ __('app.debts.yearly') }}
                                    </option>
                                </select>
                                @error('repayment_frequency')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-6" id="installment_amount_field">
                            <div class="mb-3">
                                <label class="form-label">{{ __('app.debts.installment_amount') }}</label>
                                <input type="number" step="0.01" id="installment_amount" name="installment_amount" class="form-control"
                                    value="{{ old('installment_amount') }}" placeholder="0.00">
                                <small class="text-muted">{{ __('app.debts.installment_amount_help') }}</small>
                            </div>
                        </div>
                    </div>

                    <div class="row" id="installments_field">
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label class="form-label required">{{ __('app.debts.installments_count') }}</label>
                                <input type="number" name="installments_count" id="installments_count" class="form-control @error('installments_count') is-invalid @enderror"
                                    value="{{ old('installments_count', 1) }}" min="1" max="360" required>
                                <small class="text-muted">{{ __('app.debts.installments_help') }}</small>
                                @error('installments_count')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <!-- Account & Interest -->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">{{ __('app.debts.linked_account') }}</label>
                                <select name="account_id" class="form-select @error('account_id') is-invalid @enderror">
                                    <option value="">{{ __('app.debts.select_account') }}</option>
                                    @foreach($accounts as $account)
                                    <option value="{{ $account->id }}" {{ old('account_id') == $account->id ? 'selected' : '' }}>
                                        {{ $account->icon }} {{ $account->name }} ({{ $account->currency }} {{ number_format($account->balance, 2) }})
                                    </option>
                                    @endforeach
                                </select>
                                @error('account_id')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">{{ __('app.debts.interest_rate') }}</label>
                                <div class="input-group">
                                    <input type="number" step="0.01" name="interest_rate" class="form-control @error('interest_rate') is-invalid @enderror"
                                        value="{{ old('interest_rate', 0) }}" min="0" max="100" placeholder="0.00">
                                    <span class="input-group-text">%</span>
                                    @error('interest_rate')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Reference & Notes -->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">{{ __('app.debts.reference_number') }}</label>
                                <input type="text" name="reference_number" class="form-control @error('reference_number') is-invalid @enderror"
                                    value="{{ old('reference_number') }}" placeholder="{{ __('app.debts.reference_placeholder') }}">
                                @error('reference_number')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">{{ __('app.debts.notes') }}</label>
                                <textarea name="notes" rows="1" class="form-control @error('notes') is-invalid @enderror">{{ old('notes') }}</textarea>
                                @error('notes')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <!-- Actions -->
                    <div class="text-end">
                        <a href="{{ route('decision-os.debts.index') }}" class="btn btn-light">{{ __('app.common.cancel') }}</a>
                        <button type="submit" class="btn btn-primary">
                            <i class="ri-save-line me-1"></i> {{ __('app.common.save') }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
<script>
document.addEventListener('DOMContentLoaded', function() {
    const frequencySelect = document.getElementById('repayment_frequency');
    const installmentsField = document.getElementById('installments_field');
    const installmentAmountField = document.getElementById('installment_amount_field');
    const totalAmountInput = document.getElementById('total_amount');
    const installmentsCountInput = document.getElementById('installments_count');
    const installmentAmountInput = document.getElementById('installment_amount');

    function toggleInstallments() {
        if (frequencySelect.value === 'one_time') {
            installmentsField.style.display = 'none';
            installmentAmountField.style.display = 'none';
            installmentsCountInput.value = 1;
        } else {
            installmentsField.style.display = 'block';
            installmentAmountField.style.display = 'block';
        }
    }

    // حساب المبلغ الإجمالي من قيمة الدفعة
    installmentAmountInput.addEventListener('input', function() {
        const installmentAmount = parseFloat(this.value) || 0;
        const installmentsCount = parseInt(installmentsCountInput.value) || 1;

        if (installmentAmount > 0 && installmentsCount > 0) {
            totalAmountInput.value = (installmentAmount * installmentsCount).toFixed(2);
        }
    });

    // حساب قيمة الدفعة من المبلغ الإجمالي
    function calculateInstallmentAmount() {
        const totalAmount = parseFloat(totalAmountInput.value) || 0;
        const installmentsCount = parseInt(installmentsCountInput.value) || 1;

        if (totalAmount > 0 && installmentsCount > 0 && !installmentAmountInput.value) {
            installmentAmountInput.value = (totalAmount / installmentsCount).toFixed(2);
        }
    }

    totalAmountInput.addEventListener('input', calculateInstallmentAmount);
    installmentsCountInput.addEventListener('input', function() {
        // إذا كان المستخدم غيّر عدد الأقساط، نحسب قيمة الدفعة من المبلغ الإجمالي
        if (totalAmountInput.value && !installmentAmountInput.value) {
            calculateInstallmentAmount();
        } else if (installmentAmountInput.value) {
            // إذا كان قيمة الدفعة محددة، نحسب المبلغ الإجمالي
            const installmentAmount = parseFloat(installmentAmountInput.value);
            const installmentsCount = parseInt(this.value) || 1;
            totalAmountInput.value = (installmentAmount * installmentsCount).toFixed(2);
        }
    });

    frequencySelect.addEventListener('change', toggleInstallments);
    toggleInstallments();
});
</script>
@endsection
