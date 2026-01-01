@extends('partials.layouts.master')

@section('title', __('app.accounts.title') . ' | Decision OS')
@section('title-sub', 'Decision OS')
@section('pagetitle', __('app.accounts.title'))

@section('content')
<div class="row">
    {{-- Summary Cards --}}
    <div class="col-xl-3 col-lg-6 col-md-6">
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-start justify-content-between">
                    <div>
                        <p class="text-muted mb-2">{{ __('app.accounts.total_balance') }}</p>
                        <h3 class="mb-0 text-primary">{{ auth()->user()->currency }} {{ number_format($totalBalance, 2) }}</h3>
                    </div>
                    <div class="avatar-sm bg-primary-subtle text-primary rounded-circle d-flex align-items-center justify-content-center">
                        <i class="ri-wallet-3-line fs-4"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-lg-6 col-md-6">
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-start justify-content-between">
                    <div>
                        <p class="text-muted mb-2">{{ __('app.accounts.bank_accounts') }}</p>
                        <h3 class="mb-0">{{ $bankAccounts->count() }}</h3>
                        <small class="text-success">{{ auth()->user()->currency }} {{ number_format($bankAccounts->sum('balance'), 2) }}</small>
                    </div>
                    <div class="avatar-sm bg-success-subtle text-success rounded-circle d-flex align-items-center justify-content-center">
                        <i class="ri-bank-line fs-4"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-lg-6 col-md-6">
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-start justify-content-between">
                    <div>
                        <p class="text-muted mb-2">{{ __('app.accounts.cash') }}</p>
                        <h3 class="mb-0">{{ $cashAccounts->count() }}</h3>
                        <small class="text-warning">{{ auth()->user()->currency }} {{ number_format($cashAccounts->sum('balance'), 2) }}</small>
                    </div>
                    <div class="avatar-sm bg-warning-subtle text-warning rounded-circle d-flex align-items-center justify-content-center">
                        <i class="ri-money-dollar-circle-line fs-4"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-lg-6 col-md-6">
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-start justify-content-between">
                    <div>
                        <p class="text-muted mb-2">{{ __('app.accounts.ewallets') }}</p>
                        <h3 class="mb-0">{{ $ewallets->count() }}</h3>
                        <small class="text-info">{{ auth()->user()->currency }} {{ number_format($ewallets->sum('balance'), 2) }}</small>
                    </div>
                    <div class="avatar-sm bg-info-subtle text-info rounded-circle d-flex align-items-center justify-content-center">
                        <i class="ri-smartphone-line fs-4"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h4 class="card-title mb-0">{{ __('app.accounts.all_accounts') }}</h4>
                <a href="{{ route('decision-os.accounts.create') }}" class="btn btn-primary btn-sm">
                    <i class="ri-add-line me-1"></i>
                    {{ __('app.accounts.add_new') }}
                </a>
            </div>
            <div class="card-body">
                @if($accounts->isEmpty())
                    <div class="text-center py-5">
                        <div class="avatar-xl bg-primary-subtle text-primary rounded-circle mx-auto mb-3 d-flex align-items-center justify-content-center">
                            <i class="ri-wallet-3-line fs-1"></i>
                        </div>
                        <h5 class="text-muted">{{ __('app.accounts.no_accounts') }}</h5>
                        <p class="text-muted mb-4">{{ __('app.accounts.start_by_adding') }}</p>
                        <a href="{{ route('decision-os.accounts.create') }}" class="btn btn-primary">
                            <i class="ri-add-line me-1"></i>
                            {{ __('app.accounts.add_first') }}
                        </a>
                    </div>
                @else
                    <div class="table-responsive">
                        <table class="table table-hover align-middle">
                            <thead>
                                <tr>
                                    <th>{{ __('app.accounts.name') }}</th>
                                    <th>{{ __('app.accounts.type') }}</th>
                                    <th>{{ __('app.accounts.balance') }}</th>
                                    <th>{{ __('app.accounts.currency') }}</th>
                                    <th>{{ __('app.common.actions') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($accounts as $account)
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center gap-2">
                                            @if($account->icon)
                                                <i class="{{ $account->icon }} fs-5" style="color: {{ $account->color ?? '#6c757d' }}"></i>
                                            @else
                                                <i class="ri-wallet-line fs-5 text-muted"></i>
                                            @endif
                                            <div>
                                                <strong>{{ $account->name }}</strong>
                                                @if($account->is_default)
                                                    <span class="badge bg-success-subtle text-success ms-1">{{ __('app.accounts.default') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        @if($account->type === 'bank')
                                            <span class="badge bg-success-subtle text-success">
                                                <i class="ri-bank-line me-1"></i>{{ __('app.accounts.bank') }}
                                            </span>
                                        @elseif($account->type === 'cash')
                                            <span class="badge bg-warning-subtle text-warning">
                                                <i class="ri-money-dollar-circle-line me-1"></i>{{ __('app.accounts.cash') }}
                                            </span>
                                        @else
                                            <span class="badge bg-info-subtle text-info">
                                                <i class="ri-smartphone-line me-1"></i>{{ __('app.accounts.ewallet') }}
                                            </span>
                                        @endif
                                    </td>
                                    <td>
                                        <strong class="text-{{ $account->balance >= 0 ? 'success' : 'danger' }}">
                                            {{ number_format($account->balance, 2) }}
                                        </strong>
                                    </td>
                                    <td>{{ $account->currency }}</td>
                                    <td>
                                        <div class="btn-group btn-group-sm">
                                            <a href="{{ route('decision-os.accounts.edit', $account) }}" class="btn btn-light">
                                                <i class="ri-pencil-line"></i>
                                            </a>
                                            <form action="{{ route('decision-os.accounts.destroy', $account) }}" method="POST" class="d-inline" onsubmit="return confirm('{{ __('app.accounts.confirm_delete') }}')">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-light text-danger">
                                                    <i class="ri-delete-bin-line"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
