@extends('partials.layouts.master')

@section('title', 'سجل دفعات الزكاة | Decision OS')
@section('pagetitle', 'سجل دفعات الزكاة')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <!-- Summary -->
            <div class="row mb-4">
                <div class="col-md-4">
                    <div class="card border-0 shadow-sm">
                        <div class="card-body text-center">
                            <div class="text-muted small mb-1">إجمالي هذه السنة</div>
                            <div class="fs-3 fw-bold text-success">
                                {{ number_format($totalPaidThisYear, 2) }}
                                <small class="fs-6 text-muted">{{ $currency }}</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card border-0 shadow-sm">
                        <div class="card-body text-center">
                            <div class="text-muted small mb-1">عدد الدفعات</div>
                            <div class="fs-3 fw-bold text-primary">{{ $payments->count() }}</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card border-0 shadow-sm">
                        <div class="card-body d-flex align-items-center justify-content-center">
                            <a href="{{ route('zakat.dashboard') }}" class="btn btn-outline-primary">
                                <i class="bi bi-arrow-right me-2"></i>العودة للوحة الزكاة
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Payments Table -->
            <div class="card border-0 shadow-sm">
                <div class="card-header bg-transparent d-flex justify-content-between align-items-center">
                    <h5 class="mb-0"><i class="bi bi-clock-history me-2"></i>سجل الدفعات</h5>
                    <button type="button" class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#addPaymentModal">
                        <i class="bi bi-plus-lg me-1"></i>تسجيل دفعة جديدة
                    </button>
                </div>
                <div class="card-body">
                    @if($payments->isEmpty())
                        <div class="text-center py-5 text-muted">
                            <i class="bi bi-inbox fs-1 d-block mb-3"></i>
                            <p class="mb-0">لم تسجل أي دفعات زكاة بعد</p>
                        </div>
                    @else
                        <div class="table-responsive">
                            <table class="table table-hover align-middle">
                                <thead class="table-light">
                                    <tr>
                                        <th>التاريخ</th>
                                        <th>المبلغ</th>
                                        <th>السنة الهجرية</th>
                                        <th>الجهة المستلمة</th>
                                        <th>الأصول وقت الدفع</th>
                                        <th>ملاحظات</th>
                                        <th class="text-center">إجراءات</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($payments as $payment)
                                    <tr>
                                        <td>
                                            <div class="fw-medium">{{ $payment->payment_date->format('Y-m-d') }}</div>
                                            <div class="small text-muted">{{ $payment->payment_date->diffForHumans() }}</div>
                                        </td>
                                        <td>
                                            <span class="fs-5 fw-bold text-success">
                                                {{ number_format($payment->amount, 2) }}
                                            </span>
                                            <span class="text-muted">{{ $currency }}</span>
                                        </td>
                                        <td>{{ $payment->hijri_year ?? '-' }}</td>
                                        <td>{{ $payment->recipient ?? '-' }}</td>
                                        <td>
                                            @if($payment->zakatable_assets_at_payment)
                                                <span class="text-muted">{{ number_format($payment->zakatable_assets_at_payment, 2) }}</span>
                                            @else
                                                -
                                            @endif
                                        </td>
                                        <td>
                                            @if($payment->notes)
                                                <span class="text-truncate d-inline-block" style="max-width: 150px;"
                                                      title="{{ $payment->notes }}">
                                                    {{ $payment->notes }}
                                                </span>
                                            @else
                                                -
                                            @endif
                                        </td>
                                        <td class="text-center">
                                            <form action="{{ route('zakat.payment.delete', $payment) }}" method="POST"
                                                  class="d-inline" onsubmit="return confirm('هل أنت متأكد من حذف هذه الدفعة؟')">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-outline-danger" title="حذف">
                                                    <i class="bi bi-trash"></i>
                                                </button>
                                            </form>
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
</div>

<!-- Modal: تسجيل دفعة جديدة -->
<div class="modal fade" id="addPaymentModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="{{ route('zakat.pay') }}" method="POST">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title"><i class="bi bi-plus-circle me-2"></i>تسجيل دفعة زكاة</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">المبلغ المدفوع <span class="text-danger">*</span></label>
                        <div class="input-group">
                            <span class="input-group-text">{{ $currency }}</span>
                            <input type="number" step="0.01" name="amount" class="form-control" required>
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
                        <input type="checkbox" class="form-check-input" id="reset_hawl_new" name="reset_hawl" value="1">
                        <label class="form-check-label" for="reset_hawl_new">
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
@endsection
