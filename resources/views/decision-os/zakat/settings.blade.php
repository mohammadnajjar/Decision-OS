@extends('partials.layouts.master')

@section('title', 'إعدادات الزكاة | Decision OS')
@section('pagetitle', 'إعدادات الزكاة')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <!-- تنبيه شرعي -->
            <div class="alert alert-info border-0 shadow-sm mb-4">
                <div class="d-flex align-items-start">
                    <i class="bi bi-info-circle-fill fs-4 me-3 text-info"></i>
                    <div>
                        <h6 class="alert-heading mb-1">معلومات عن حساب الزكاة</h6>
                        <ul class="mb-0 small ps-3">
                            <li>النصاب = 85 غرام ذهب</li>
                            <li>نسبة الزكاة = 2.5%</li>
                            <li>الحول الهجري = 354 يوم</li>
                            <li>الحول الميلادي = 365 يوم</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="card border-0 shadow-sm">
                <div class="card-header bg-transparent">
                    <h5 class="mb-0"><i class="bi bi-gear me-2"></i>إعدادات حاسبة الزكاة</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('zakat.settings.update') }}" method="POST">
                        @csrf

                        <!-- تفعيل الزكاة -->
                        <div class="mb-4 pb-3 border-bottom">
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch"
                                       id="enabled" name="enabled" value="1"
                                       {{ old('enabled', $settings->enabled ?? false) ? 'checked' : '' }}>
                                <label class="form-check-label fw-bold" for="enabled">
                                    تفعيل حاسبة الزكاة
                                </label>
                            </div>
                            <div class="form-text">
                                عند التفعيل، سيظهر قسم الزكاة في لوحة التحكم مع تنبيهات عند اقتراب موعد الزكاة
                            </div>
                        </div>

                        <!-- تاريخ بداية الحول -->
                        <div class="mb-3">
                            <label class="form-label">تاريخ بداية الحول <span class="text-danger">*</span></label>
                            <input type="date" name="hawl_start_date" class="form-control"
                                   value="{{ old('hawl_start_date', $settings->hawl_start_date?->format('Y-m-d')) }}">
                            <div class="form-text">
                                التاريخ الذي بلغ فيه مالك النصاب أول مرة. إذا لم تتذكر، يمكنك اختيار تاريخ تقريبي.
                            </div>
                            @error('hawl_start_date')
                                <div class="text-danger small">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- سعر غرام الذهب -->
                        <div class="mb-3">
                            <label class="form-label">سعر غرام الذهب (عيار 24) <span class="text-danger">*</span></label>
                            <div class="input-group">
                                <input type="number" step="0.01" name="nisab_gold_price" class="form-control"
                                       value="{{ old('nisab_gold_price', $settings->nisab_gold_price) }}"
                                       placeholder="مثال: 250">
                                <select name="currency" class="form-select" style="max-width: 100px;">
                                    @foreach($currencies as $curr)
                                        <option value="{{ $curr }}" {{ old('currency', $settings->currency ?? 'SAR') === $curr ? 'selected' : '' }}>
                                            {{ $curr }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-text">
                                أدخل سعر غرام الذهب الحالي بعملتك المحلية. النصاب = 85 × سعر الغرام
                                @if($settings && $settings->nisab_gold_price)
                                    <br><strong>النصاب الحالي: {{ number_format($settings->nisab_value, 2) }} {{ $settings->currency }}</strong>
                                    @if($settings->gold_price_updated_at)
                                        <span class="text-muted">(آخر تحديث: {{ $settings->gold_price_updated_at->format('Y-m-d') }})</span>
                                    @endif
                                @endif
                            </div>
                            @error('nisab_gold_price')
                                <div class="text-danger small">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- طريقة الحساب -->
                        <div class="mb-3">
                            <label class="form-label">طريقة حساب الحول</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="calculation_method"
                                       id="method_hijri" value="hijri_year"
                                       {{ old('calculation_method', $settings->calculation_method ?? 'hijri_year') === 'hijri_year' ? 'checked' : '' }}>
                                <label class="form-check-label" for="method_hijri">
                                    <strong>السنة الهجرية</strong> (354 يوم) - الأصل الشرعي
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="calculation_method"
                                       id="method_gregorian" value="gregorian_year"
                                       {{ old('calculation_method', $settings->calculation_method) === 'gregorian_year' ? 'checked' : '' }}>
                                <label class="form-check-label" for="method_gregorian">
                                    <strong>السنة الميلادية</strong> (365 يوم) - للتسهيل
                                </label>
                            </div>
                        </div>

                        <!-- احتساب الديون المستحقة لي -->
                        <div class="mb-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="include_receivable_debts"
                                       name="include_receivable_debts" value="1"
                                       {{ old('include_receivable_debts', $settings->include_receivable_debts ?? false) ? 'checked' : '' }}>
                                <label class="form-check-label" for="include_receivable_debts">
                                    احتساب الديون المستحقة لي في الأصول الزكوية
                                </label>
                            </div>
                            <div class="form-text text-warning">
                                <i class="bi bi-exclamation-triangle me-1"></i>
                                بعض العلماء لا يوجبون زكاة الدين على الغير. راجع عالمًا للتأكد.
                            </div>
                        </div>

                        <!-- ملاحظات -->
                        <div class="mb-4">
                            <label class="form-label">ملاحظات</label>
                            <textarea name="notes" class="form-control" rows="3"
                                      placeholder="ملاحظات خاصة بك...">{{ old('notes', $settings->notes) }}</textarea>
                        </div>

                        <!-- أزرار -->
                        <div class="d-flex gap-2">
                            <button type="submit" class="btn btn-primary">
                                <i class="bi bi-check-lg me-2"></i>حفظ الإعدادات
                            </button>
                            <a href="{{ route('zakat.dashboard') }}" class="btn btn-outline-secondary">
                                الرجوع للوحة الزكاة
                            </a>
                        </div>
                    </form>
                </div>
            </div>

            <!-- معلومات إضافية -->
            <div class="card border-0 shadow-sm mt-4">
                <div class="card-header bg-transparent">
                    <h6 class="mb-0"><i class="bi bi-lightbulb me-2"></i>كيف يعمل الحساب؟</h6>
                </div>
                <div class="card-body">
                    <ol class="mb-0">
                        <li class="mb-2">
                            <strong>الأصول الزكوية</strong> = مجموع أرصدة الحسابات الزكوية − الديون المستحقة عليك
                        </li>
                        <li class="mb-2">
                            <strong>النصاب</strong> = 85 × سعر غرام الذهب
                        </li>
                        <li class="mb-2">
                            إذا كانت الأصول ≥ النصاب ومر الحول → <strong>الزكاة واجبة</strong>
                        </li>
                        <li>
                            <strong>الزكاة</strong> = الأصول الزكوية × 2.5%
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
