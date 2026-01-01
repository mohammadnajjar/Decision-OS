@extends('partials.layouts.master')
@section('title', $debt->party_name . ' | Decision OS')
@section('title-sub', 'Decision OS')
@section('pagetitle', __('app.debts.debt_details'))

@section('content')
<div class="row">
    <!-- Debt Summary -->
    <div class="col-lg-4">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">{{ __('app.debts.summary') }}</h5>
            </div>
            <div class="card-body">
                <div class="text-center mb-3">
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

                <h3 class="text-center">{{ $debt->party_name }}</h3>
                @if($debt->party_contact)
                <p class="text-center text-muted">{{ $debt->party_contact }}</p>
                @endif

                <hr>

                <!-- Amount Progress -->
                <div class="mb-3">
                    <div class="d-flex justify-content-between mb-2">
                        <span>{{ __('app.debts.total_amount') }}</span>
                        <strong>{{ $debt->currency }} {{ number_format($debt->total_amount, 2) }}</strong>
                    </div>
                    <div class="d-flex justify-content-between mb-2">
                        <span class="text-success">{{ __('app.debts.paid') }}</span>
                        <strong class="text-success">{{ $debt->currency }} {{ number_format($debt->paid_amount, 2) }}</strong>
                    </div>
                    <div class="d-flex justify-content-between mb-2">
                        <span class="{{ $debt->type === 'payable' ? 'text-danger' : 'text-success' }}">
                            {{ __('app.debts.remaining') }}
                        </span>
                        <strong class="{{ $debt->type === 'payable' ? 'text-danger' : 'text-success' }}">
                            {{ $debt->currency }} {{ number_format($debt->remaining_amount, 2) }}
                        </strong>
                    </div>

                    <div class="progress" style="height: 20px;">
                        <div class="progress-bar bg-success" style="width: {{ ($debt->paid_amount / $debt->total_amount) * 100 }}%">
                            {{ round(($debt->paid_amount / $debt->total_amount) * 100) }}%
                        </div>
                    </div>
                </div>

                <hr>

                <!-- Details -->
                <ul class="list-unstyled mb-0">
                    <li class="mb-2">
                        <i class="ri-calendar-line text-muted me-2"></i>
                        <strong>{{ __('app.debts.start_date') }}:</strong>
                        {{ $debt->start_date->format('Y-m-d') }}
                    </li>
                    @if($debt->due_date)
                    <li class="mb-2">
                        <i class="ri-calendar-check-line text-muted me-2"></i>
                        <strong>{{ __('app.debts.due_date') }}:</strong>
                        {{ $debt->due_date->format('Y-m-d') }}
                        <br><small class="text-muted ms-4">{{ $debt->due_date->diffForHumans() }}</small>
                    </li>
                    @endif
                    <li class="mb-2">
                        <i class="ri-refresh-line text-muted me-2"></i>
                        <strong>{{ __('app.debts.frequency') }}:</strong>
                        {{ __('app.debts.' . $debt->repayment_frequency) }}
                    </li>
                    <li class="mb-2">
                        <i class="ri-list-ordered text-muted me-2"></i>
                        <strong>{{ __('app.debts.installments') }}:</strong>
                        {{ $debt->installments_count }}
                    </li>
                    @if($debt->interest_rate > 0)
                    <li class="mb-2">
                        <i class="ri-percent-line text-muted me-2"></i>
                        <strong>{{ __('app.debts.interest_rate') }}:</strong>
                        {{ $debt->interest_rate }}%
                    </li>
                    @endif
                    @if($debt->account)
                    <li class="mb-2">
                        <i class="ri-wallet-line text-muted me-2"></i>
                        <strong>{{ __('app.debts.account') }}:</strong>
                        {{ $debt->account->icon }} {{ $debt->account->name }}
                    </li>
                    @endif
                    @if($debt->reference_number)
                    <li class="mb-2">
                        <i class="ri-file-text-line text-muted me-2"></i>
                        <strong>{{ __('app.debts.reference') }}:</strong>
                        {{ $debt->reference_number }}
                    </li>
                    @endif
                    <li class="mb-2">
                        <i class="ri-flag-line text-muted me-2"></i>
                        <strong>{{ __('app.debts.status') }}:</strong>
                        @if($debt->status === 'fully_paid')
                        <span class="badge bg-success">{{ __('app.debts.fully_paid') }}</span>
                        @elseif($debt->status === 'partially_paid')
                        <span class="badge bg-info">{{ __('app.debts.partially_paid') }}</span>
                        @elseif($debt->status === 'overdue')
                        <span class="badge bg-danger">{{ __('app.debts.overdue') }}</span>
                        @else
                        <span class="badge bg-secondary">{{ __('app.debts.active') }}</span>
                        @endif
                    </li>
                </ul>

                @if($debt->notes)
                <hr>
                <div class="alert alert-info mb-0">
                    <strong>{{ __('app.debts.notes') }}:</strong>
                    <p class="mb-0 mt-1">{{ $debt->notes }}</p>
                </div>
                @endif

                <hr>

                <div class="d-grid gap-2">
                    <a href="{{ route('decision-os.debts.edit', $debt) }}" class="btn btn-soft-primary">
                        <i class="ri-edit-line me-1"></i> {{ __('app.common.edit') }}
                    </a>
                    <form action="{{ route('decision-os.debts.destroy', $debt) }}" method="POST"
                        onsubmit="return confirm('{{ __('app.debts.confirm_delete') }}')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-soft-danger w-100">
                            <i class="ri-delete-bin-line me-1"></i> {{ __('app.common.delete') }}
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Payment Schedule -->
    <div class="col-lg-8">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">{{ __('app.debts.payment_schedule') }}</h5>
            </div>

            <div class="card-body">
                @if($debt->payments->isEmpty())
                <div class="text-center py-5">
                    <i class="ri-calendar-line display-4 text-muted"></i>
                    <h5 class="mt-3">{{ __('app.debts.no_schedule') }}</h5>
                </div>
                @else
                <div class="table-responsive">
                    <table class="table table-hover align-middle">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>{{ __('app.debts.due_date') }}</th>
                                <th>{{ __('app.debts.amount') }}</th>
                                <th>{{ __('app.debts.status') }}</th>
                                <th>{{ __('app.debts.payment_date') }}</th>
                                <th>{{ __('app.common.actions') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($debt->payments as $index => $payment)
                            <tr class="{{ $payment->isOverdue() ? 'table-danger' : '' }}">
                                <td>{{ $index + 1 }}</td>
                                <td>
                                    {{ $payment->due_date ? $payment->due_date->format('Y-m-d') : '-' }}
                                    @if($payment->due_date)
                                    <br><small class="text-muted">{{ $payment->due_date->diffForHumans() }}</small>
                                    @endif
                                </td>
                                <td><strong>{{ $debt->currency }} {{ number_format($payment->amount, 2) }}</strong></td>
                                <td>
                                    @if($payment->status === 'paid')
                                    <span class="badge bg-success">{{ __('app.debts.paid') }}</span>
                                    @elseif($payment->isOverdue())
                                    <span class="badge bg-danger">{{ __('app.debts.overdue') }}</span>
                                    @else
                                    <span class="badge bg-secondary">{{ __('app.debts.pending') }}</span>
                                    @endif
                                </td>
                                <td>
                                    @if($payment->payment_date)
                                    {{ $payment->payment_date->format('Y-m-d') }}
                                    @if($payment->account)
                                    <br><small class="text-muted">{{ $payment->account->icon }} {{ $payment->account->name }}</small>
                                    @endif
                                    @else
                                    -
                                    @endif
                                </td>
                                <td>
                                    @if($payment->status === 'pending')
                                    <button type="button" class="btn btn-sm btn-success" data-bs-toggle="modal"
                                        data-bs-target="#paymentModal{{ $payment->id }}">
                                        <i class="ri-check-line me-1"></i> {{ __('app.debts.mark_paid') }}
                                    </button>

                                    <!-- Payment Modal -->
                                    <div class="modal fade" id="paymentModal{{ $payment->id }}" tabindex="-1">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">{{ __('app.debts.record_payment') }}</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                                </div>
                                                <form action="{{ route('decision-os.debts.record-payment', $debt) }}" method="POST">
                                                    @csrf
                                                    <input type="hidden" name="payment_id" value="{{ $payment->id }}">
                                                    <div class="modal-body">
                                                        <div class="alert alert-info">
                                                            <strong>{{ __('app.debts.payment_amount') }}:</strong>
                                                            {{ $debt->currency }} {{ number_format($payment->amount, 2) }}
                                                        </div>

                                                        <div class="mb-3">
                                                            <label class="form-label">{{ __('app.debts.select_account') }}</label>
                                                            <select name="account_id" class="form-select">
                                                                <option value="">{{ __('app.debts.no_account') }}</option>
                                                                @foreach($accounts as $account)
                                                                <option value="{{ $account->id }}" {{ $account->is_default ? 'selected' : '' }}>
                                                                    {{ $account->icon }} {{ $account->name }}
                                                                    ({{ $account->currency }} {{ number_format($account->balance, 2) }})
                                                                </option>
                                                                @endforeach
                                                            </select>
                                                        </div>

                                                        <div class="mb-3">
                                                            <label class="form-label">{{ __('app.debts.payment_method') }}</label>
                                                            <input type="text" name="payment_method" class="form-control"
                                                                placeholder="{{ __('app.debts.payment_method_placeholder') }}">
                                                        </div>

                                                        <div class="mb-3">
                                                            <label class="form-label">{{ __('app.debts.notes') }}</label>
                                                            <textarea name="notes" class="form-control" rows="2"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">
                                                            {{ __('app.common.cancel') }}
                                                        </button>
                                                        <button type="submit" class="btn btn-success">
                                                            <i class="ri-check-line me-1"></i> {{ __('app.debts.confirm_payment') }}
                                                        </button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    @else
                                    <span class="text-success"><i class="ri-check-double-line"></i></span>
                                    @endif
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr class="table-light">
                                <td colspan="2"><strong>{{ __('app.debts.total') }}</strong></td>
                                <td><strong>{{ $debt->currency }} {{ number_format($debt->payments->sum('amount'), 2) }}</strong></td>
                                <td colspan="3"></td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
