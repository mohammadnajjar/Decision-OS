@extends('partials.layouts.master')

@section('title', 'لوحة الزكاة | Decision OS')
@section('pagetitle', 'حاسبة الزكاة')

@section('content')
<div class="container-fluid">
    <!-- تنبيه شرعي -->
    <div class="alert alert-warning border-0 shadow-sm mb-4">
        <div class="d-flex align-items-start">
            <i class="bi bi-exclamation-triangle-fill fs-4 me-3 text-warning"></i>
            <div>
                <h6 class="alert-heading mb-1">⚠️ تنبيه مهم</h6>
                <p class="mb-0 small">
                    هذا الحساب <strong>تقديري</strong> لمساعدتك في التخطيط المالي.
                    يرجى مراجعة عالم شرعي أو جهة موثوقة للتأكد من المبلغ الصحيح.
                    النظام لا يحدد جهة الدفع ولا يُصدر فتوى.
                </p>
            </div>
        </div>
    </div>

    @if(!$settings || !$settings->enabled)
        <!-- حالة عدم التفعيل -->
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="card border-0 shadow-sm text-center py-5">
                    <div class="card-body">
                        <i class="bi bi-moon-stars fs-1 text-muted mb-3 d-block"></i>
                        <h4 class="mb-3">حاسبة الزكاة غير مفعلة</h4>
                        <p class="text-muted mb-4">
                            فعّل حاسبة الزكاة لتتبع موعد زكاتك والمبلغ التقديري المستحق
                        </p>
                        <a href="{{ route('zakat.settings') }}" class="btn btn-primary">
                            <i class="bi bi-gear me-2"></i>تفعيل الآن
                        </a>
                    </div>
                </div>
            </div>
        </div>
    @else
        <!-- Dashboard الزكاة -->
        <div class="row">
            <!-- Status Card -->
            <div class="col-lg-4 mb-4">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-body text-center py-4">
                        @php
                            $statusIcon = match($zakatData['status']) {
                                'due' => 'bi-exclamation-circle-fill',
                                'approaching' => 'bi-clock-fill',
                                'below_nisab' => 'bi-check-circle-fill',
                                'not_due' => 'bi-hourglass-split',
                                default => 'bi-question-circle'
                            };
                            $statusColor = $zakatData['status_color'];
                        @endphp

                        <div class="mb-3">
                            <span class="avatar avatar-xl bg-{{ $statusColor }}-subtle rounded-circle">
                                <i class="bi {{ $statusIcon }} text-{{ $statusColor }} fs-1"></i>
                            </span>
                        </div>

                        <h5 class="mb-2">حالة الزكاة</h5>
                        <span class="badge bg-{{ $statusColor }}-subtle text-{{ $statusColor }} fs-6 px-3 py-2">
                            {{ $zakatData['status_label'] }}
                        </span>

                        @if($zakatData['status'] === 'due' && isset($zakatData['zakat_due']))
                            <div class="mt-3 pt-3 border-top">
                                <div class="text-muted small mb-1">الزكاة المستحقة تقديرًا</div>
                                <div class="fs-3 fw-bold text-danger">
                                    {{ number_format($zakatData['zakat_due'], 2) }}
                                    <small class="fs-6">{{ $zakatData['currency'] }}</small>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>

            <!-- Zakatable Assets -->
            <div class="col-lg-4 mb-4">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-header bg-transparent">
                        <h6 class="mb-0"><i class="bi bi-wallet2 me-2"></i>الأصول الزكوية</h6>
                    </div>
                    <div class="card-body">
                        <div class="text-center mb-3">
                            <div class="fs-2 fw-bold text-primary">
                                {{ number_format($zakatData['zakatable_assets'] ?? 0, 2) }}
                            </div>
                            <div class="text-muted">{{ $zakatData['currency'] }}</div>
                        </div>

                        <hr>

                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <span class="text-muted">النصاب</span>
                            <span class="fw-medium">{{ number_format($zakatData['nisab_value'] ?? 0, 2) }} {{ $zakatData['currency'] }}</span>
                        </div>

                        <div class="d-flex justify-content-between align-items-center">
                            <span class="text-muted">الحالة</span>
                            @if($zakatData['nisab_reached'] ?? false)
                                <span class="badge bg-success-subtle text-success">بلغ النصاب</span>
                            @else
                                <span class="badge bg-secondary-subtle text-secondary">تحت النصاب</span>
                            @endif
                        </div>
                    </div>
                </div>
            </div>

            <!-- Hawl Countdown -->
            <div class="col-lg-4 mb-4">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-header bg-transparent">
                        <h6 class="mb-0"><i class="bi bi-calendar-event me-2"></i>الحول</h6>
                    </div>
                    <div class="card-body text-center">
                        @if(isset($zakatData['days_until_hawl']))
                            @if($zakatData['days_until_hawl'] > 0)
                                <div class="fs-1 fw-bold text-primary mb-2">
                                    {{ $zakatData['days_until_hawl'] }}
                                </div>
                                <div class="text-muted">يوم متبقي</div>

                                <div class="progress mt-3" style="height: 8px;">
                                    @php
                                        $hawlDays = $settings->calculation_method === 'hijri_year' ? 354 : 365;
                                        $progress = (($hawlDays - $zakatData['days_until_hawl']) / $hawlDays) * 100;
                                    @endphp
                                    <div class="progress-bar bg-primary" style="width: {{ $progress }}%"></div>
                                </div>

                                <div class="mt-3 small text-muted">
                                    <div>بداية الحول: {{ $zakatData['hawl_start_date'] ?? '-' }}</div>
                                    <div>نهاية الحول: {{ $zakatData['hawl_end_date'] ?? '-' }}</div>
                                </div>
                            @else
                                <div class="text-danger">
                                    <i class="bi bi-check-circle-fill fs-1 mb-2 d-block"></i>
                                    <div class="fs-5 fw-bold">اكتمل الحول</div>
                                    <div class="small text-muted">الزكاة واجبة الآن</div>
                                </div>
                            @endif
                        @else
                            <div class="text-muted">
                                <i class="bi bi-calendar-x fs-1 mb-2 d-block"></i>
                                <div>لم يُحدد تاريخ بداية الحول</div>
                                <a href="{{ route('zakat.settings') }}" class="btn btn-sm btn-outline-primary mt-2">
                                    تحديد التاريخ
                                </a>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>

        <!-- Assets Breakdown -->
        @if(isset($zakatData['assets_breakdown']))
        <div class="row">
            <div class="col-12">
                <div class="card border-0 shadow-sm">
                    <div class="card-header bg-transparent d-flex justify-content-between align-items-center">
                        <h6 class="mb-0"><i class="bi bi-list-ul me-2"></i>تفصيل الأصول الزكوية</h6>
                        <a href="{{ route('zakat.settings') }}" class="btn btn-sm btn-outline-secondary">
                            <i class="bi bi-gear me-1"></i>الإعدادات
                        </a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead class="table-light">
                                    <tr>
                                        <th>النوع</th>
                                        <th>الاسم</th>
                                        <th class="text-end">المبلغ</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($zakatData['assets_breakdown']['accounts'] ?? [] as $account)
                                    <tr>
                                        <td><span class="badge bg-success-subtle text-success">حساب</span></td>
                                        <td>{{ $account['name'] }}</td>
                                        <td class="text-end text-success">+{{ number_format($account['amount'], 2) }}</td>
                                    </tr>
                                    @endforeach

                                    @foreach($zakatData['assets_breakdown']['debts_payable'] ?? [] as $debt)
                                    <tr>
                                        <td><span class="badge bg-danger-subtle text-danger">دين علي</span></td>
                                        <td>{{ $debt['name'] }}</td>
                                        <td class="text-end text-danger">{{ number_format($debt['amount'], 2) }}</td>
                                    </tr>
                                    @endforeach

                                    @foreach($zakatData['assets_breakdown']['debts_receivable'] ?? [] as $debt)
                                    <tr>
                                        <td><span class="badge bg-info-subtle text-info">دين لي</span></td>
                                        <td>{{ $debt['name'] }}</td>
                                        <td class="text-end text-info">+{{ number_format($debt['amount'], 2) }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                                <tfoot class="table-light">
                                    <tr>
                                        <th colspan="2">الإجمالي</th>
                                        <th class="text-end fs-5">{{ number_format($zakatData['zakatable_assets'] ?? 0, 2) }} {{ $zakatData['currency'] }}</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif

        <!-- Actions -->
        <div class="row mt-4">
            <div class="col-12">
                <div class="card border-0 shadow-sm">
                    <div class="card-body d-flex flex-wrap gap-3 justify-content-center">
                        <a href="{{ route('zakat.history') }}" class="btn btn-outline-primary">
                            <i class="bi bi-clock-history me-2"></i>سجل الدفعات
                        </a>

                        @if($zakatData['status'] === 'due' || $zakatData['status'] === 'approaching')
                            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#recordPaymentModal">
                                <i class="bi bi-check-lg me-2"></i>سجّلت دفع الزكاة
                            </button>
                        @endif

                        <a href="{{ route('zakat.settings') }}" class="btn btn-outline-secondary">
                            <i class="bi bi-gear me-2"></i>الإعدادات
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- آخر دفعة -->
        @if($zakatData['last_payment'])
        <div class="row mt-4">
            <div class="col-12">
                <div class="alert alert-success border-0">
                    <i class="bi bi-check-circle me-2"></i>
                    آخر دفعة: <strong>{{ number_format($zakatData['last_payment']['amount'], 2) }} {{ $zakatData['currency'] }}</strong>
                    بتاريخ {{ $zakatData['last_payment']['date'] }}
                    | إجمالي هذه السنة: <strong>{{ number_format($zakatData['total_paid_this_year'], 2) }} {{ $zakatData['currency'] }}</strong>
                </div>
            </div>
        </div>
        @endif
    @endif
</div>

<!-- Modal: تسجيل دفعة -->
@if($settings && $settings->enabled)
<div class="modal fade" id="recordPaymentModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="{{ route('zakat.pay') }}" method="POST">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title"><i class="bi bi-check-circle me-2"></i>تسجيل دفع الزكاة</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">المبلغ المدفوع <span class="text-danger">*</span></label>
                        <div class="input-group">
                            <span class="input-group-text">{{ $zakatData['currency'] }}</span>
                            <input type="number" step="0.01" name="amount" class="form-control"
                                   value="{{ $zakatData['zakat_due'] ?? '' }}" required>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">تاريخ الدفع <span class="text-danger">*</span></label>
                        <input type="date" name="payment_date" class="form-control" value="{{ today()->toDateString() }}" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">السنة الهجرية</label>
                        <input type="text" name="hijri_year" class="form-control" placeholder="مثال: 1447">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">الجهة المستلمة</label>
                        <input type="text" name="recipient" class="form-control" placeholder="اختياري">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">ملاحظات</label>
                        <textarea name="notes" class="form-control" rows="2" placeholder="اختياري"></textarea>
                    </div>

                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="reset_hawl" name="reset_hawl" value="1" checked>
                        <label class="form-check-label" for="reset_hawl">
                            إعادة بدء الحول من اليوم
                        </label>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">إلغاء</button>
                    <button type="submit" class="btn btn-success">
                        <i class="bi bi-check-lg me-2"></i>تسجيل الدفعة
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endif
@endsection
