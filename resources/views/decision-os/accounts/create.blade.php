@extends('partials.layouts.master')

@section('title', __('app.accounts.add_new') . ' | Decision OS')
@section('title-sub', 'Decision OS')
@section('pagetitle', __('app.accounts.add_new'))

@section('content')
<div class="row justify-content-center">
    <div class="col-lg-8">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title mb-0">{{ __('app.accounts.create_account') }}</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('decision-os.accounts.store') }}" method="POST">
                    @csrf

                    {{-- Account Name --}}
                    <div class="mb-3">
                        <label for="name" class="form-label">{{ __('app.accounts.account_name') }} <span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror"
                               id="name" name="name" value="{{ old('name') }}"
                               placeholder="{{ __('app.accounts.name_placeholder') }}" required>
                        @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- Account Type --}}
                    <div class="mb-3">
                        <label class="form-label">{{ __('app.accounts.account_type') }} <span class="text-danger">*</span></label>
                        <div class="row g-3">
                            <div class="col-md-4">
                                <div class="form-check card-radio">
                                    <input class="form-check-input" type="radio" name="type" id="type_bank" value="bank" {{ old('type') === 'bank' ? 'checked' : '' }}>
                                    <label class="form-check-label d-flex align-items-center gap-2" for="type_bank">
                                        <i class="ri-bank-line fs-4 text-success"></i>
                                        <span>{{ __('app.accounts.bank') }}</span>
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-check card-radio">
                                    <input class="form-check-input" type="radio" name="type" id="type_cash" value="cash" {{ old('type') === 'cash' || !old('type') ? 'checked' : '' }}>
                                    <label class="form-check-label d-flex align-items-center gap-2" for="type_cash">
                                        <i class="ri-money-dollar-circle-line fs-4 text-warning"></i>
                                        <span>{{ __('app.accounts.cash') }}</span>
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-check card-radio">
                                    <input class="form-check-input" type="radio" name="type" id="type_ewallet" value="ewallet" {{ old('type') === 'ewallet' ? 'checked' : '' }}>
                                    <label class="form-check-label d-flex align-items-center gap-2" for="type_ewallet">
                                        <i class="ri-smartphone-line fs-4 text-info"></i>
                                        <span>{{ __('app.accounts.ewallet') }}</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Balance --}}
                    <div class="mb-3">
                        <label for="balance" class="form-label">{{ __('app.accounts.current_balance') }} <span class="text-danger">*</span></label>
                        <input type="number" class="form-control @error('balance') is-invalid @enderror"
                               id="balance" name="balance" value="{{ old('balance', 0) }}"
                               step="0.01" min="0" required>
                        @error('balance')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- Currency --}}
                    <div class="mb-3">
                        <label for="currency" class="form-label">{{ __('app.accounts.currency') }}</label>
                        <select class="form-select @error('currency') is-invalid @enderror" id="currency" name="currency">
                            <option value="AED" {{ (old('currency') ?? auth()->user()->currency) === 'AED' ? 'selected' : '' }}>AED - درهم إماراتي</option>
                            <option value="USD" {{ (old('currency') ?? auth()->user()->currency) === 'USD' ? 'selected' : '' }}>USD - دولار أمريكي</option>
                            <option value="EUR" {{ (old('currency') ?? auth()->user()->currency) === 'EUR' ? 'selected' : '' }}>EUR - يورو</option>
                            <option value="SAR" {{ (old('currency') ?? auth()->user()->currency) === 'SAR' ? 'selected' : '' }}>SAR - ريال سعودي</option>
                            <option value="EGP" {{ (old('currency') ?? auth()->user()->currency) === 'EGP' ? 'selected' : '' }}>EGP - جنيه مصري</option>
                        </select>
                        @error('currency')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- Icon & Color --}}
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="icon" class="form-label">{{ __('app.accounts.icon') }} ({{ __('app.common.optional') }})</label>
                            <select class="form-select" id="icon" name="icon">
                                <option value="">{{ __('app.accounts.no_icon') }}</option>
                                <option value="ri-wallet-3-line">💼 محفظة</option>
                                <option value="ri-bank-line">🏦 بنك</option>
                                <option value="ri-money-dollar-circle-line">💵 نقد</option>
                                <option value="ri-smartphone-line">📱 محفظة إلكترونية</option>
                                <option value="ri-safe-line">🔒 خزنة</option>
                            </select>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="color" class="form-label">{{ __('app.accounts.color') }} ({{ __('app.common.optional') }})</label>
                            <input type="color" class="form-control form-control-color w-100"
                                   id="color" name="color" value="{{ old('color', '#0d6efd') }}">
                        </div>
                    </div>

                    {{-- Is Default --}}
                    <div class="mb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="is_default" name="is_default" value="1" {{ old('is_default') ? 'checked' : '' }}>
                            <label class="form-check-label" for="is_default">
                                {{ __('app.accounts.set_as_default') }}
                                <small class="text-muted d-block">{{ __('app.accounts.default_description') }}</small>
                            </label>
                        </div>
                    </div>

                    {{-- Notes --}}
                    <div class="mb-3">
                        <label for="notes" class="form-label">{{ __('app.common.notes') }} ({{ __('app.common.optional') }})</label>
                        <textarea class="form-control" id="notes" name="notes" rows="3">{{ old('notes') }}</textarea>
                    </div>

                    <div class="d-flex gap-2">
                        <button type="submit" class="btn btn-primary">
                            <i class="ri-save-line me-1"></i>
                            {{ __('app.actions.save') }}
                        </button>
                        <a href="{{ route('decision-os.accounts.index') }}" class="btn btn-light">
                            {{ __('app.actions.cancel') }}
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@section('css')
<style>
.card-radio {
    padding: 1rem;
    border: 2px solid #e9ecef;
    border-radius: 0.5rem;
    transition: all 0.3s;
}
.card-radio:hover {
    border-color: #0d6efd;
    background-color: #f8f9fa;
}
.card-radio .form-check-input:checked ~ .form-check-label {
    color: #0d6efd;
}
</style>
@endsection
