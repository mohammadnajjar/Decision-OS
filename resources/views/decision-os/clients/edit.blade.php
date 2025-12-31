@extends('partials.layouts.master')

@section('title', 'Decision OS | تعديل عميل')
@section('title-sub', 'Decision OS')
@section('pagetitle', 'تعديل بيانات العميل')

@section('content')
<div id="layout-wrapper">
    <div class="container-fluid">

        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">
                            <i class="ri-user-settings-line me-2 text-primary"></i>
                            تعديل: {{ $client->name }}
                        </h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('decision-os.clients.update', $client) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="mb-4">
                                <label class="form-label fw-medium">اسم العميل <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="name" required
                                       value="{{ $client->name }}">
                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-4">
                                    <label class="form-label fw-medium">البريد الإلكتروني</label>
                                    <input type="email" class="form-control" name="email"
                                           value="{{ $client->email }}">
                                </div>
                                <div class="col-md-6 mb-4">
                                    <label class="form-label fw-medium">رقم الهاتف</label>
                                    <input type="text" class="form-control" name="phone"
                                           value="{{ $client->phone }}">
                                </div>
                            </div>

                            <div class="mb-4">
                                <label class="form-label fw-medium">الشركة</label>
                                <input type="text" class="form-control" name="company"
                                       value="{{ $client->company }}">
                            </div>

                            <hr class="my-4">
                            <h6 class="text-muted mb-3">تقييم العميل</h6>

                            <div class="row">
                                <div class="col-md-4 mb-4">
                                    <label class="form-label fw-medium">عدد التأخيرات في الدفع</label>
                                    <input type="number" class="form-control" name="late_payments"
                                           value="{{ $client->late_payments }}" min="0">
                                </div>
                                <div class="col-md-4 mb-4">
                                    <label class="form-label fw-medium">مستوى الجهد (1-5)</label>
                                    <select class="form-select" name="effort_score">
                                        @for($i = 1; $i <= 5; $i++)
                                            <option value="{{ $i }}" {{ $client->effort_score == $i ? 'selected' : '' }}>
                                                {{ $i }} - {{ ['سهل جداً', 'سهل', 'متوسط', 'صعب', 'صعب جداً'][$i-1] }}
                                            </option>
                                        @endfor
                                    </select>
                                    <small class="text-muted">1 = سهل التعامل، 5 = يستنزف الوقت</small>
                                </div>
                                <div class="col-md-4 mb-4">
                                    <label class="form-label fw-medium">جودة التواصل (1-5)</label>
                                    <select class="form-select" name="communication_score">
                                        @for($i = 1; $i <= 5; $i++)
                                            <option value="{{ $i }}" {{ $client->communication_score == $i ? 'selected' : '' }}>
                                                {{ $i }} - {{ ['سيء جداً', 'سيء', 'متوسط', 'جيد', 'ممتاز'][$i-1] }}
                                            </option>
                                        @endfor
                                    </select>
                                </div>
                            </div>

                            <div class="mb-4">
                                <label class="form-label fw-medium">ملاحظات</label>
                                <textarea class="form-control" name="notes" rows="3">{{ $client->notes }}</textarea>
                            </div>

                            {{-- Current Status --}}
                            <div class="alert alert-{{ $client->status }} mb-4">
                                <strong>الحالة الحالية:</strong>
                                @if($client->status === 'green')
                                    🟢 عميل ممتاز
                                @elseif($client->status === 'yellow')
                                    🟡 يحتاج انتباه
                                @else
                                    🔴 عميل إشكالي
                                @endif
                                <small class="d-block mt-1">الحالة تُحسب تلقائياً بناءً على التقييمات</small>
                            </div>

                            <div class="d-flex justify-content-between">
                                <a href="{{ route('decision-os.clients.index') }}" class="btn btn-outline-secondary">
                                    <i class="ri-arrow-right-line me-1"></i> رجوع
                                </a>
                                <button type="submit" class="btn btn-primary btn-lg">
                                    <i class="ri-save-line me-1"></i> حفظ التعديلات
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
