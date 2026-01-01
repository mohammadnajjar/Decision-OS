@extends('partials.layouts.master')
@section('title', __('app.debts.title') . ' | Decision OS')
@section('title-sub', 'Decision OS')
@section('pagetitle', __('app.debts.title'))

@section('content')
<div class="row">
    <div class="col-12">
        <!-- Stats Cards -->
        <div class="row mb-4">
            <div class="col-md-3">
                <div class="card border-danger">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="flex-grow-1">
                                <p class="text-muted mb-1">{{ __('app.debts.total_payable') }}</p>
                                <h4 class="mb-0 text-danger">{{ auth()->user()->currency }} {{ number_format($totalPayable, 2) }}</h4>
                            </div>
                            <div class="avatar-sm flex-shrink-0">
                                <span class="avatar-title bg-danger-subtle text-danger rounded fs-3">
                                    <i class="ri-arrow-up-circle-line"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card border-success">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="flex-grow-1">
                                <p class="text-muted mb-1">{{ __('app.debts.total_receivable') }}</p>
                                <h4 class="mb-0 text-success">{{ auth()->user()->currency }} {{ number_format($totalReceivable, 2) }}</h4>
                            </div>
                            <div class="avatar-sm flex-shrink-0">
                                <span class="avatar-title bg-success-subtle text-success rounded fs-3">
                                    <i class="ri-arrow-down-circle-line"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card border-warning">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="flex-grow-1">
                                <p class="text-muted mb-1">{{ __('app.debts.overdue') }}</p>
                                <h4 class="mb-0 text-warning">{{ $overdueCount }}</h4>
                            </div>
                            <div class="avatar-sm flex-shrink-0">
                                <span class="avatar-title bg-warning-subtle text-warning rounded fs-3">
                                    <i class="ri-alarm-warning-line"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card border-info">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="flex-grow-1">
                                <p class="text-muted mb-1">{{ __('app.debts.net_position') }}</p>
                                <h4 class="mb-0 {{ ($totalReceivable - $totalPayable) >= 0 ? 'text-success' : 'text-danger' }}">
                                    {{ auth()->user()->currency }} {{ number_format($totalReceivable - $totalPayable, 2) }}
                                </h4>
                            </div>
                            <div class="avatar-sm flex-shrink-0">
                                <span class="avatar-title bg-info-subtle text-info rounded fs-3">
                                    <i class="ri-swap-line"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Due Soon Alert -->
        @if($dueSoon->isNotEmpty())
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <i class="ri-alarm-warning-line me-2"></i>
            <strong>{{ __('app.debts.due_soon_alert') }}</strong>
            <ul class="mb-0 mt-2">
                @foreach($dueSoon as $debt)
                <li>
                    <strong>{{ $debt->party_name }}</strong>:
                    {{ $debt->currency }} {{ number_format($debt->remaining_amount, 2) }}
                    - {{ __('app.debts.due_on') }} {{ $debt->due_date->format('Y-m-d') }}
                    ({{ $debt->due_date->diffForHumans() }})
                </li>
                @endforeach
            </ul>
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
        @endif

        <!-- Tabs & Actions -->
        <div class="card">
            <div class="card-header">
                <div class="row align-items-center">
                    <div class="col">
                        <ul class="nav nav-tabs-custom card-header-tabs border-bottom-0" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link {{ $type === 'all' ? 'active' : '' }}" href="{{ route('decision-os.debts.index', ['type' => 'all']) }}">
                                    {{ __('app.debts.all') }}
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ $type === 'payable' ? 'active' : '' }}" href="{{ route('decision-os.debts.index', ['type' => 'payable']) }}">
                                    <i class="ri-arrow-up-circle-line text-danger me-1"></i>
                                    {{ __('app.debts.payable') }}
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ $type === 'receivable' ? 'active' : '' }}" href="{{ route('decision-os.debts.index', ['type' => 'receivable']) }}">
                                    <i class="ri-arrow-down-circle-line text-success me-1"></i>
                                    {{ __('app.debts.receivable') }}
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-auto">
                        <div class="dropdown">
                            <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown">
                                <i class="ri-add-line me-1"></i> {{ __('app.debts.add_new') }}
                            </button>
                            <ul class="dropdown-menu">
                                <li>
                                    <a class="dropdown-item" href="{{ route('decision-os.debts.create', ['type' => 'payable']) }}">
                                        <i class="ri-arrow-up-circle-line text-danger me-2"></i>
                                        {{ __('app.debts.add_payable') }}
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="{{ route('decision-os.debts.create', ['type' => 'receivable']) }}">
                                        <i class="ri-arrow-down-circle-line text-success me-2"></i>
                                        {{ __('app.debts.add_receivable') }}
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card-body">
                @if($debts->isEmpty())
                <div class="text-center py-5">
                    <i class="ri-file-list-3-line display-4 text-muted"></i>
                    <h5 class="mt-3">{{ __('app.debts.no_debts') }}</h5>
                    <p class="text-muted">{{ __('app.debts.start_tracking') }}</p>
                </div>
                @else
                <div class="table-responsive">
                    <table class="table table-hover align-middle">
                        <thead>
                            <tr>
                                <th>{{ __('app.debts.party') }}</th>
                                <th>{{ __('app.debts.type') }}</th>
                                <th>{{ __('app.debts.total_amount') }}</th>
                                <th>{{ __('app.debts.paid') }}</th>
                                <th>{{ __('app.debts.remaining') }}</th>
                                <th>{{ __('app.debts.due_date') }}</th>
                                <th>{{ __('app.debts.status') }}</th>
                                <th>{{ __('app.common.actions') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($debts as $debt)
                            <tr>
                                <td>
                                    <div>
                                        <strong>{{ $debt->party_name }}</strong>
                                        @if($debt->party_contact)
                                        <br><small class="text-muted">{{ $debt->party_contact }}</small>
                                        @endif
                                    </div>
                                </td>
                                <td>
                                    @if($debt->type === 'payable')
                                    <span class="badge bg-danger-subtle text-danger">
                                        <i class="ri-arrow-up-circle-line me-1"></i>
                                        {{ __('app.debts.i_owe') }}
                                    </span>
                                    @else
                                    <span class="badge bg-success-subtle text-success">
                                        <i class="ri-arrow-down-circle-line me-1"></i>
                                        {{ __('app.debts.owes_me') }}
                                    </span>
                                    @endif
                                </td>
                                <td>{{ $debt->currency }} {{ number_format($debt->total_amount, 2) }}</td>
                                <td>{{ $debt->currency }} {{ number_format($debt->paid_amount, 2) }}</td>
                                <td>
                                    <strong class="{{ $debt->type === 'payable' ? 'text-danger' : 'text-success' }}">
                                        {{ $debt->currency }} {{ number_format($debt->remaining_amount, 2) }}
                                    </strong>
                                </td>
                                <td>
                                    @if($debt->due_date)
                                    {{ $debt->due_date->format('Y-m-d') }}
                                    <br><small class="text-muted">{{ $debt->due_date->diffForHumans() }}</small>
                                    @else
                                    <span class="text-muted">-</span>
                                    @endif
                                </td>
                                <td>
                                    @if($debt->status === 'fully_paid')
                                    <span class="badge bg-success">{{ __('app.debts.fully_paid') }}</span>
                                    @elseif($debt->status === 'partially_paid')
                                    <span class="badge bg-info">{{ __('app.debts.partially_paid') }}</span>
                                    @elseif($debt->status === 'overdue')
                                    <span class="badge bg-danger">{{ __('app.debts.overdue') }}</span>
                                    @else
                                    <span class="badge bg-secondary">{{ __('app.debts.active') }}</span>
                                    @endif
                                </td>
                                <td>
                                    <div class="hstack gap-2">
                                        <a href="{{ route('decision-os.debts.show', $debt) }}" class="btn btn-sm btn-soft-primary">
                                            <i class="ri-eye-line"></i>
                                        </a>
                                        <a href="{{ route('decision-os.debts.edit', $debt) }}" class="btn btn-sm btn-soft-info">
                                            <i class="ri-edit-line"></i>
                                        </a>
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
