@extends('partials.layouts.master')

@section('title', 'Decision OS | قرار جديد')
@section('title-sub', 'Decision OS')
@section('pagetitle', 'تسجيل قرار جديد')

@section('content')
<div id="layout-wrapper">
    <div class="container-fluid">

        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">
                            <i class="ri-git-commit-line me-2 text-primary"></i>
                            تسجيل قرار جديد
                        </h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('decision-os.decisions.store') }}" method="POST">
                            @csrf

                            <div class="mb-4">
                                <label class="form-label fw-medium">عنوان القرار <span class="text-danger">*</span></label>
                                <input type="text" class="form-control form-control-lg" name="title" 
                                       placeholder="مثال: قبول عرض العميل X" required>
                            </div>

                            <div class="mb-4">
                                <label class="form-label fw-medium">السياق</label>
                                <select class="form-select" name="context">
                                    <option value="work">💼 عمل</option>
                                    <option value="financial">💰 مالي</option>
                                    <option value="client">👤 عميل</option>
                                    <option value="personal">🏠 شخصي</option>
                                    <option value="business">🏢 أعمال</option>
                                </select>
                            </div>

                            <div class="mb-4">
                                <label class="form-label fw-medium">لماذا اتخذت هذا القرار؟</label>
                                <textarea class="form-control" name="reason" rows="3" 
                                          placeholder="ما هي الأسباب والعوامل التي دفعتك لهذا القرار؟"></textarea>
                            </div>

                            <div class="mb-4">
                                <label class="form-label fw-medium">النتيجة المتوقعة</label>
                                <textarea class="form-control" name="expected_outcome" rows="3" 
                                          placeholder="ماذا تتوقع أن يحدث نتيجة هذا القرار؟"></textarea>
                            </div>

                            <div class="mb-4">
                                <label class="form-label fw-medium">تاريخ المراجعة</label>
                                <input type="date" class="form-control" name="review_date" 
                                       min="{{ date('Y-m-d', strtotime('+1 day')) }}">
                                <small class="text-muted">متى يجب مراجعة نتيجة هذا القرار؟</small>
                            </div>

                            <div class="d-flex justify-content-between">
                                <a href="{{ route('decision-os.decisions.index') }}" class="btn btn-outline-secondary">
                                    <i class="ri-arrow-right-line me-1"></i> رجوع
                                </a>
                                <button type="submit" class="btn btn-primary btn-lg">
                                    <i class="ri-save-line me-1"></i> حفظ القرار
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
