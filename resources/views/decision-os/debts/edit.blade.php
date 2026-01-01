@extends('partials.layouts.master')
@section('title', __('app.common.edit') . ' - ' . $debt->party_name . ' | Decision OS')
@section('title-sub', 'Decision OS')
@section('pagetitle', __('app.common.edit') . ' - ' . $debt->party_name)

@section('content')
<div class="row">
    <div class="col-lg-8 mx-auto">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">{{ __('app.common.edit') }} {{ $debt->party_name }}</h5>
            </div>

            <div class="card-body">
                <form action="{{ route('decision-os.debts.update', $debt) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <!-- Type Badge -->
                    <div class="text-center mb-4">
                        @if($debt->type === 'payable')
                        <span class="badge bg-danger-subtle text-danger fs-5 px-3 py-2">
                            <i class="ri-arrow-up-circle-line me-1"></i>
                            {{ __('app.debts.i_owe') }}
                        </span>
                        @else
                        <span class="badge bg-success-subtle text-success fs-5 px-3 py-2">
                            <i class="ri-arrow-down-circle-line me-1"></i>
                            {{ __('app.debts.owes_me') }}
                        </span>
                        @endif
                    </div>

                    <!-- Party Information -->
                    <div class="row">
                        <div class="col-md-8">
                            <div class="mb-3">
                                <label class="form-label required">
                                    {{ $debt->type === 'payable' ? __('app.debts.creditor_name') : __('app.debts.debtor_name') }}
                                </label>
                                <input type="text" name="party_name" class="form-control @error('party_name') is-invalid @enderror"
                                    value="{{ old('party_name', $debt->party_name) }}" required>
                                @error('party_name')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="mb-3">
                                <label class="form-label">{{ __('app.debts.contact') }}</label>
                                <input type="text" name="party_contact" class="form-control @error('party_contact') is-invalid @enderror"
                                    value="{{ old('party_contact', $debt->party_contact) }}">
                                @error('party_contact')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <!-- Amount Info (Read-only) -->
                    <div class="alert alert-info">
                        <div class="row">
                            <div class="col-md-4">
                                <strong>{{ __('app.debts.total_amount') }}:</strong><br>
                                {{ $debt->currency }} {{ number_format($debt->total_amount, 2) }}
                            </div>
                            <div class="col-md-4">
                                <strong>{{ __('app.debts.paid') }}:</strong><br>
                                {{ $debt->currency }} {{ number_format($debt->paid_amount, 2) }}
                            </div>
                            <div class="col-md-4">
                                <strong>{{ __('app.debts.remaining') }}:</strong><br>
                                {{ $debt->currency }} {{ number_format($debt->remaining_amount, 2) }}
                            </div>
                        </div>
                    </div>

                    <!-- Due Date -->
                    <div class="mb-3">
                        <label class="form-label">{{ __('app.debts.due_date') }}</label>
                        <input type="date" name="due_date" class="form-control @error('due_date') is-invalid @enderror"
                            value="{{ old('due_date', $debt->due_date?->format('Y-m-d')) }}">
                        @error('due_date')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Account & Interest -->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">{{ __('app.debts.linked_account') }}</label>
                                <select name="account_id" class="form-select @error('account_id') is-invalid @enderror">
                                    <option value="">{{ __('app.debts.select_account') }}</option>
                                    @foreach($accounts as $account)
                                    <option value="{{ $account->id }}" {{ old('account_id', $debt->account_id) == $account->id ? 'selected' : '' }}>
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
                                        value="{{ old('interest_rate', $debt->interest_rate) }}" min="0" max="100">
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
                                    value="{{ old('reference_number', $debt->reference_number) }}">
                                @error('reference_number')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">{{ __('app.debts.notes') }}</label>
                                <textarea name="notes" rows="1" class="form-control @error('notes') is-invalid @enderror">{{ old('notes', $debt->notes) }}</textarea>
                                @error('notes')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <!-- Actions -->
                    <div class="text-end">
                        <a href="{{ route('decision-os.debts.show', $debt) }}" class="btn btn-light">{{ __('app.common.cancel') }}</a>
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
