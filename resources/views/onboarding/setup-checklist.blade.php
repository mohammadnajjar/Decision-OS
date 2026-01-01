@extends('partials.layouts.master_auth')

@section('title', 'إعداد حسابك | Decision OS')

@section('content')
<div class="container">
    <div class="row justify-content-center align-items-center min-vh-100">
        <div class="col-xl-8 col-lg-10">
            <div class="card shadow-lg border-0">
                <div class="card-header bg-primary text-white text-center py-4">
                    <h2 class="mb-1">🚀 مرحباً بك في Decision OS</h2>
                    <p class="mb-0 opacity-75">دعنا نجهز نظامك في 3 خطوات سريعة</p>
                </div>

                <div class="card-body p-4">
                    {{-- Progress Steps --}}
                    <div class="d-flex justify-content-center mb-4">
                        <div class="d-flex align-items-center">
                            <div class="rounded-circle bg-primary text-white d-flex align-items-center justify-content-center" style="width: 40px; height: 40px;">1</div>
                            <div class="bg-primary" style="width: 60px; height: 3px;"></div>
                            <div class="rounded-circle bg-primary text-white d-flex align-items-center justify-content-center" style="width: 40px; height: 40px;">2</div>
                            <div class="bg-secondary" style="width: 60px; height: 3px;"></div>
                            <div class="rounded-circle bg-secondary text-white d-flex align-items-center justify-content-center" style="width: 40px; height: 40px;">3</div>
                        </div>
                    </div>

                    <form action="{{ route('onboarding.setup.store') }}" method="POST">
                        @csrf

                        {{-- Step 1: Financial Setup --}}
                        <div class="mb-4">
                            <h5 class="mb-3 text-primary">
                                <i class="ri-wallet-3-line me-2"></i>
                                الإعداد المالي
                            </h5>
                            <div class="row g-3">
                                <div class="col-md-4">
                                    <label class="form-label">الرصيد الافتتاحي *</label>
                                    <div class="input-group">
                                        <span class="input-group-text">$</span>
                                        <input type="number" name="starting_balance" class="form-control"
                                               value="{{ old('starting_balance', 0) }}"
                                               step="0.01" min="0" required
                                               placeholder="كم معك الآن؟">
                                    </div>
                                    <small class="text-muted">المبلغ الموجود معك حالياً</small>
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label">الدخل الشهري المتوقع</label>
                                    <div class="input-group">
                                        <span class="input-group-text">$</span>
                                        <input type="number" name="monthly_income" class="form-control"
                                               value="{{ old('monthly_income', 0) }}"
                                               step="0.01" min="0"
                                               placeholder="متوسط دخلك الشهري">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label">المصروف الشهري المتوقع</label>
                                    <div class="input-group">
                                        <span class="input-group-text">$</span>
                                        <input type="number" name="monthly_expenses" class="form-control"
                                               value="{{ old('monthly_expenses', 0) }}"
                                               step="0.01" min="0"
                                               placeholder="متوسط مصروفك الشهري">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <hr class="my-4">

                        {{-- Step 2: Today's Focus --}}
                        <div class="mb-4">
                            <h5 class="mb-3 text-success">
                                <i class="ri-focus-3-line me-2"></i>
                                المهمة الأهم اليوم (Today One Thing)
                            </h5>
                            <div class="row">
                                <div class="col-12">
                                    <input type="text" name="today_one_thing" class="form-control form-control-lg"
                                           value="{{ old('today_one_thing') }}"
                                           placeholder="ما هي المهمة الوحيدة التي إذا أنجزتها اليوم ستشعر بالرضا؟">
                                    <small class="text-muted">مهمة واحدة فقط. ركّز!</small>
                                </div>
                            </div>
                        </div>

                        <hr class="my-4">

                        {{-- Step 3: Discipline Targets --}}
                        <div class="mb-4">
                            <h5 class="mb-3 text-info">
                                <i class="ri-heart-pulse-line me-2"></i>
                                أهداف الانضباط الأسبوعية
                            </h5>
                            <div class="row g-3">
                                <div class="col-md-4">
                                    <label class="form-label">أيام الجيم/الرياضة</label>
                                    <select name="gym_target" class="form-select">
                                        <option value="3" selected>3 أيام/أسبوع</option>
                                        <option value="4">4 أيام/أسبوع</option>
                                        <option value="5">5 أيام/أسبوع</option>
                                        <option value="6">6 أيام/أسبوع</option>
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label">ساعات العمل اليومية</label>
                                    <select name="work_hours_target" class="form-select">
                                        <option value="6">6 ساعات</option>
                                        <option value="8" selected>8 ساعات</option>
                                        <option value="10">10 ساعات</option>
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label">أيام الراحة</label>
                                    <select name="rest_days_target" class="form-select">
                                        <option value="1" selected>1 يوم/أسبوع</option>
                                        <option value="2">2 يوم/أسبوع</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <hr class="my-4">

                        {{-- Quick Start Options --}}
                        <div class="mb-4">
                            <h5 class="mb-3 text-warning">
                                <i class="ri-settings-4-line me-2"></i>
                                إعدادات سريعة
                            </h5>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="seed_expense_categories" id="seedCategories" checked>
                                        <label class="form-check-label" for="seedCategories">
                                            إنشاء فئات المصروفات الافتراضية (قهوة، أكل، مواصلات...)
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="start_quran_khatma" id="startQuran" checked>
                                        <label class="form-check-label" for="startQuran">
                                            بدء ختمة القرآن لهذا الشهر
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- Submit --}}
                        <div class="text-center mt-4">
                            <button type="submit" class="btn btn-primary btn-lg px-5">
                                <i class="ri-rocket-line me-2"></i>
                                ابدأ رحلتك الآن
                            </button>
                            <p class="text-muted mt-2 small">يمكنك تعديل هذه الإعدادات لاحقاً</p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
