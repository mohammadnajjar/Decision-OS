@extends('partials.layouts.master')

@section('title', __('app.reports.financial_reports') . ' | Decision OS')
@section('title-sub', 'Decision OS')
@section('pagetitle', __('app.reports.financial_reports'))

@section('content')
<div class="row">
    {{-- Period Selector --}}
    <div class="col-12 mb-3">
        <div class="card">
            <div class="card-body">
                <div class="btn-group" role="group">
                    <a href="?period=day" class="btn btn-{{ $period === 'day' ? 'primary' : 'outline-primary' }}">اليوم</a>
                    <a href="?period=week" class="btn btn-{{ $period === 'week' ? 'primary' : 'outline-primary' }}">هذا الأسبوع</a>
                    <a href="?period=month" class="btn btn-{{ $period === 'month' ? 'primary' : 'outline-primary' }}">هذا الشهر</a>
                    <a href="?period=year" class="btn btn-{{ $period === 'year' ? 'primary' : 'outline-primary' }}">هذا العام</a>
                </div>
                <span class="text-muted ms-3">
                    {{ $dates['start']->format('Y-m-d') }} - {{ $dates['end']->format('Y-m-d') }}
                </span>
            </div>
        </div>
    </div>

    {{-- Summary Cards --}}
    <div class="col-xl-3 col-lg-6 col-md-6">
        <div class="card border-start border-success border-3">
            <div class="card-body">
                <h6 class="text-muted mb-2">{{ __('app.reports.total_income') }}</h6>
                <h3 class="text-success mb-0">{{ auth()->user()->currency }} {{ number_format($totalIncome, 2) }}</h3>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-lg-6 col-md-6">
        <div class="card border-start border-danger border-3">
            <div class="card-body">
                <h6 class="text-muted mb-2">{{ __('app.reports.total_expenses') }}</h6>
                <h3 class="text-danger mb-0">{{ auth()->user()->currency }} {{ number_format($totalExpenses, 2) }}</h3>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-lg-6 col-md-6">
        <div class="card border-start border-warning border-3">
            <div class="card-body">
                <h6 class="text-muted mb-2">{{ __('app.reports.investments') }}</h6>
                <h3 class="text-warning mb-0">{{ auth()->user()->currency }} {{ number_format($totalInvestments, 2) }}</h3>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-lg-6 col-md-6">
        <div class="card border-start border-{{ $netBalance >= 0 ? 'success' : 'danger' }} border-3">
            <div class="card-body">
                <h6 class="text-muted mb-2">{{ __('app.reports.net_balance') }}</h6>
                <h3 class="text-{{ $netBalance >= 0 ? 'success' : 'danger' }} mb-0">
                    {{ auth()->user()->currency }} {{ number_format($netBalance, 2) }}
                </h3>
            </div>
        </div>
    </div>
</div>

<div class="row">
    {{-- Expenses by Category --}}
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">{{ __('app.reports.expenses_by_category') }}</h5>
            </div>
            <div class="card-body">
                @if($expensesByCategory->isEmpty())
                    <p class="text-muted text-center py-4">لا توجد مصاريف في هذه الفترة</p>
                @else
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>الفئة</th>
                                    <th class="text-end">المبلغ</th>
                                    <th class="text-end">النسبة</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($expensesByCategory as $item)
                                <tr>
                                    <td>
                                        <span class="fs-5">{{ $item->category->icon }}</span>
                                        {{ $item->category->name }}
                                        @if($item->category->is_investment)
                                            <span class="badge bg-warning-subtle text-warning ms-1">استثمار</span>
                                        @endif
                                    </td>
                                    <td class="text-end">
                                        <strong>{{ auth()->user()->currency }} {{ number_format($item->total, 2) }}</strong>
                                    </td>
                                    <td class="text-end">
                                        <div class="progress" style="height: 20px;">
                                            <div class="progress-bar" role="progressbar"
                                                 style="width: {{ ($item->total / $totalExpenses) * 100 }}%; background-color: {{ $item->category->color ?? '#6c757d' }}"
                                                 aria-valuenow="{{ ($item->total / $totalExpenses) * 100 }}"
                                                 aria-valuemin="0" aria-valuemax="100">
                                                {{ number_format(($item->total / $totalExpenses) * 100, 1) }}%
                                            </div>
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

    {{-- Investments --}}
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">{{ __('app.reports.investment_summary') }}</h5>
            </div>
            <div class="card-body">
                @if($investments->isEmpty())
                    <div class="text-center py-4">
                        <div class="avatar-lg bg-warning-subtle text-warning rounded-circle mx-auto mb-3 d-flex align-items-center justify-content-center">
                            <i class="ri-line-chart-line fs-1"></i>
                        </div>
                        <p class="text-muted">لا توجد استثمارات في هذه الفترة</p>
                        <small class="text-muted">يمكنك تحديد فئة كـ"استثمار" من إعدادات الفئات</small>
                    </div>
                @else
                    <div class="list-group list-group-flush">
                        @foreach($investments as $investment)
                        <div class="list-group-item d-flex justify-content-between align-items-center">
                            <div>
                                <span class="fs-5">{{ $investment->category->icon }}</span>
                                <strong>{{ $investment->category->name }}</strong>
                                @if($investment->category->auto_percentage)
                                    <span class="badge bg-info-subtle text-info ms-2">
                                        {{ $investment->category->auto_percentage }}% تلقائي
                                    </span>
                                @endif
                                <div class="small text-muted">{{ $investment->count }} عملية</div>
                            </div>
                            <div class="text-end">
                                <strong class="text-warning">{{ auth()->user()->currency }} {{ number_format($investment->total, 2) }}</strong>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="mt-3 p-3 bg-warning-subtle rounded">
                        <small class="text-warning">
                            <i class="ri-information-line me-1"></i>
                            إجمالي الاستثمارات: <strong>{{ number_format(($totalInvestments / $totalIncome) * 100, 1) }}%</strong> من الدخل
                        </small>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>

<div class="row">
    {{-- Expenses by Account --}}
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">{{ __('app.reports.expenses_by_account') }}</h5>
            </div>
            <div class="card-body">
                @if($expensesByAccount->isEmpty())
                    <p class="text-muted text-center py-4">لا توجد مصاريف مرتبطة بحسابات</p>
                @else
                    <div class="list-group list-group-flush">
                        @foreach($expensesByAccount as $item)
                        <div class="list-group-item d-flex justify-content-between align-items-center">
                            <div>
                                @if($item->account->icon)
                                    <i class="{{ $item->account->icon }}" style="color: {{ $item->account->color }}"></i>
                                @endif
                                <strong>{{ $item->account->name }}</strong>
                                <span class="badge bg-secondary-subtle text-secondary ms-2">{{ $item->account->type }}</span>
                            </div>
                            <strong class="text-danger">{{ $item->account->currency }} {{ number_format($item->total, 2) }}</strong>
                        </div>
                        @endforeach
                    </div>
                @endif
            </div>
        </div>
    </div>

    {{-- Income by Account --}}
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">{{ __('app.reports.income_by_account') }}</h5>
            </div>
            <div class="card-body">
                @if($incomesByAccount->isEmpty())
                    <p class="text-muted text-center py-4">لا توجد دخل مرتبط بحسابات</p>
                @else
                    <div class="list-group list-group-flush">
                        @foreach($incomesByAccount as $item)
                        <div class="list-group-item d-flex justify-content-between align-items-center">
                            <div>
                                @if($item->account->icon)
                                    <i class="{{ $item->account->icon }}" style="color: {{ $item->account->color }}"></i>
                                @endif
                                <strong>{{ $item->account->name }}</strong>
                                <span class="badge bg-secondary-subtle text-secondary ms-2">{{ $item->account->type }}</span>
                            </div>
                            <strong class="text-success">{{ $item->account->currency }} {{ number_format($item->total, 2) }}</strong>
                        </div>
                        @endforeach
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
