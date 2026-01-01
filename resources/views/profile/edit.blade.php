@extends('partials.layouts.master')

@section('title', 'الملف الشخصي | Decision OS')
@section('title-sub', 'الإعدادات')
@section('pagetitle', 'الملف الشخصي')

@section('content')
<div class="row">
    <div class="col-xl-4">
        {{-- Profile Card --}}
        <div class="card">
            <div class="card-body text-center">
                <div class="avatar-xl mx-auto mb-3">
                    <div class="avatar-title bg-primary-subtle text-primary rounded-circle fs-1">
                        {{ strtoupper(substr($user->name, 0, 1)) }}
                    </div>
                </div>
                <h4 class="mb-1">{{ $user->name }}</h4>
                <p class="text-muted mb-3">{{ $user->email }}</p>
                <div class="d-flex justify-content-center gap-2">
                    <span class="badge bg-success-subtle text-success">
                        <i class="ri-checkbox-circle-line me-1"></i>
                        نشط
                    </span>
                    <span class="badge bg-info-subtle text-info">
                        عضو منذ {{ $user->created_at->diffForHumans() }}
                    </span>
                </div>
            </div>
        </div>

        {{-- Quick Stats --}}
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">
                    <i class="ri-bar-chart-line me-2"></i>
                    إحصائيات سريعة
                </h5>
            </div>
            <div class="card-body">
                @php
                    $currency = $user->currency ?? 'AED';
                    $currencySymbol = $currency === 'AED' ? 'د.إ' : ($currency === 'USD' ? '$' : $currency);
                @endphp
                <div class="d-flex justify-content-between mb-2">
                    <span class="text-muted">الرصيد المتاح</span>
                    <span class="fw-bold {{ $user->cash_on_hand >= 0 ? 'text-success' : 'text-danger' }}">
                        {{ $currencySymbol }} {{ number_format($user->cash_on_hand ?? 0, 2) }}
                    </span>
                </div>
                <div class="d-flex justify-content-between mb-2">
                    <span class="text-muted">العملة</span>
                    <span class="badge bg-primary">{{ $currency }}</span>
                </div>
                <div class="d-flex justify-content-between">
                    <span class="text-muted">Onboarding</span>
                    <span class="badge {{ $user->onboarding_completed ? 'bg-success' : 'bg-warning' }}">
                        {{ $user->onboarding_completed ? '✓ مكتمل' : 'غير مكتمل' }}
                    </span>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-8">
        {{-- Update Profile Information --}}
        <div class="card mb-3">
            <div class="card-header">
                <h5 class="card-title mb-0">
                    <i class="ri-user-line me-2"></i>
                    معلومات الملف الشخصي
                </h5>
            </div>
            <div class="card-body">
                <form method="post" action="{{ route('profile.update') }}">
                    @csrf
                    @method('patch')

                    <div class="row g-3">
                        <div class="col-md-6">
                            <label for="name" class="form-label">الاسم</label>
                            <input type="text" class="form-control" id="name" name="name"
                                   value="{{ old('name', $user->name) }}" required>
                            @error('name')
                                <div class="text-danger small mt-1">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-6">
                            <label for="email" class="form-label">البريد الإلكتروني</label>
                            <input type="email" class="form-control" id="email" name="email"
                                   value="{{ old('email', $user->email) }}" required>
                            @error('email')
                                <div class="text-danger small mt-1">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-6">
                            <label for="locale" class="form-label">اللغة</label>
                            <select name="locale" id="locale" class="form-select">
                                <option value="ar" {{ ($user->locale ?? 'ar') === 'ar' ? 'selected' : '' }}>العربية</option>
                                <option value="en" {{ ($user->locale ?? 'ar') === 'en' ? 'selected' : '' }}>English</option>
                            </select>
                            @error('locale')
                                <div class="text-danger small mt-1">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-6">
                            <label for="timezone" class="form-label">المنطقة الزمنية</label>
                            <select name="timezone" id="timezone" class="form-select">
                                {{-- دول الخليج العربي --}}
                                <optgroup label="دول الخليج العربي">
                                    <option value="Asia/Dubai" {{ ($user->timezone ?? 'Asia/Dubai') === 'Asia/Dubai' ? 'selected' : '' }}>الإمارات - دبي (GMT+4)</option>
                                    <option value="Asia/Riyadh" {{ ($user->timezone ?? 'Asia/Dubai') === 'Asia/Riyadh' ? 'selected' : '' }}>السعودية - الرياض (GMT+3)</option>
                                    <option value="Asia/Kuwait" {{ ($user->timezone ?? 'Asia/Dubai') === 'Asia/Kuwait' ? 'selected' : '' }}>الكويت (GMT+3)</option>
                                    <option value="Asia/Qatar" {{ ($user->timezone ?? 'Asia/Dubai') === 'Asia/Qatar' ? 'selected' : '' }}>قطر (GMT+3)</option>
                                    <option value="Asia/Bahrain" {{ ($user->timezone ?? 'Asia/Dubai') === 'Asia/Bahrain' ? 'selected' : '' }}>البحرين (GMT+3)</option>
                                    <option value="Asia/Muscat" {{ ($user->timezone ?? 'Asia/Dubai') === 'Asia/Muscat' ? 'selected' : '' }}>عُمان - مسقط (GMT+4)</option>
                                </optgroup>

                                {{-- بلاد الشام والعراق --}}
                                <optgroup label="بلاد الشام والعراق">
                                    <option value="Asia/Baghdad" {{ ($user->timezone ?? 'Asia/Dubai') === 'Asia/Baghdad' ? 'selected' : '' }}>العراق - بغداد (GMT+3)</option>
                                    <option value="Asia/Damascus" {{ ($user->timezone ?? 'Asia/Dubai') === 'Asia/Damascus' ? 'selected' : '' }}>سوريا - دمشق (GMT+3)</option>
                                    <option value="Asia/Beirut" {{ ($user->timezone ?? 'Asia/Dubai') === 'Asia/Beirut' ? 'selected' : '' }}>لبنان - بيروت (GMT+3)</option>
                                    <option value="Asia/Amman" {{ ($user->timezone ?? 'Asia/Dubai') === 'Asia/Amman' ? 'selected' : '' }}>الأردن - عمان (GMT+3)</option>
                                    <option value="Asia/Jerusalem" {{ ($user->timezone ?? 'Asia/Dubai') === 'Asia/Jerusalem' ? 'selected' : '' }}>فلسطين - القدس (GMT+3)</option>
                                </optgroup>

                                {{-- شمال أفريقيا --}}
                                <optgroup label="شمال أفريقيا">
                                    <option value="Africa/Cairo" {{ ($user->timezone ?? 'Asia/Dubai') === 'Africa/Cairo' ? 'selected' : '' }}>مصر - القاهرة (GMT+2)</option>
                                    <option value="Africa/Khartoum" {{ ($user->timezone ?? 'Asia/Dubai') === 'Africa/Khartoum' ? 'selected' : '' }}>السودان - الخرطوم (GMT+2)</option>
                                    <option value="Africa/Tripoli" {{ ($user->timezone ?? 'Asia/Dubai') === 'Africa/Tripoli' ? 'selected' : '' }}>ليبيا - طرابلس (GMT+2)</option>
                                    <option value="Africa/Tunis" {{ ($user->timezone ?? 'Asia/Dubai') === 'Africa/Tunis' ? 'selected' : '' }}>تونس (GMT+1)</option>
                                    <option value="Africa/Algiers" {{ ($user->timezone ?? 'Asia/Dubai') === 'Africa/Algiers' ? 'selected' : '' }}>الجزائر (GMT+1)</option>
                                    <option value="Africa/Casablanca" {{ ($user->timezone ?? 'Asia/Dubai') === 'Africa/Casablanca' ? 'selected' : '' }}>المغرب - الدار البيضاء (GMT+1)</option>
                                </optgroup>

                                {{-- آسيا --}}
                                <optgroup label="آسيا">
                                    <option value="Asia/Istanbul" {{ ($user->timezone ?? 'Asia/Dubai') === 'Asia/Istanbul' ? 'selected' : '' }}>تركيا - إسطنبول (GMT+3)</option>
                                    <option value="Asia/Tehran" {{ ($user->timezone ?? 'Asia/Dubai') === 'Asia/Tehran' ? 'selected' : '' }}>إيران - طهران (GMT+3:30)</option>
                                    <option value="Asia/Kabul" {{ ($user->timezone ?? 'Asia/Dubai') === 'Asia/Kabul' ? 'selected' : '' }}>أفغانستان - كابول (GMT+4:30)</option>
                                    <option value="Asia/Karachi" {{ ($user->timezone ?? 'Asia/Dubai') === 'Asia/Karachi' ? 'selected' : '' }}>باكستان - كراتشي (GMT+5)</option>
                                    <option value="Asia/Kolkata" {{ ($user->timezone ?? 'Asia/Dubai') === 'Asia/Kolkata' ? 'selected' : '' }}>الهند - كولكاتا (GMT+5:30)</option>
                                    <option value="Asia/Dhaka" {{ ($user->timezone ?? 'Asia/Dubai') === 'Asia/Dhaka' ? 'selected' : '' }}>بنغلاديش - دكا (GMT+6)</option>
                                    <option value="Asia/Jakarta" {{ ($user->timezone ?? 'Asia/Dubai') === 'Asia/Jakarta' ? 'selected' : '' }}>إندونيسيا - جاكرتا (GMT+7)</option>
                                    <option value="Asia/Kuala_Lumpur" {{ ($user->timezone ?? 'Asia/Dubai') === 'Asia/Kuala_Lumpur' ? 'selected' : '' }}>ماليزيا - كوالالمبور (GMT+8)</option>
                                    <option value="Asia/Singapore" {{ ($user->timezone ?? 'Asia/Dubai') === 'Asia/Singapore' ? 'selected' : '' }}>سنغافورة (GMT+8)</option>
                                    <option value="Asia/Shanghai" {{ ($user->timezone ?? 'Asia/Dubai') === 'Asia/Shanghai' ? 'selected' : '' }}>الصين - شانغهاي (GMT+8)</option>
                                    <option value="Asia/Tokyo" {{ ($user->timezone ?? 'Asia/Dubai') === 'Asia/Tokyo' ? 'selected' : '' }}>اليابان - طوكيو (GMT+9)</option>
                                    <option value="Asia/Seoul" {{ ($user->timezone ?? 'Asia/Dubai') === 'Asia/Seoul' ? 'selected' : '' }}>كوريا الجنوبية - سيول (GMT+9)</option>
                                </optgroup>

                                {{-- أوروبا --}}
                                <optgroup label="أوروبا">
                                    <option value="Europe/London" {{ ($user->timezone ?? 'Asia/Dubai') === 'Europe/London' ? 'selected' : '' }}>المملكة المتحدة - لندن (GMT+0)</option>
                                    <option value="Europe/Dublin" {{ ($user->timezone ?? 'Asia/Dubai') === 'Europe/Dublin' ? 'selected' : '' }}>أيرلندا - دبلن (GMT+0)</option>
                                    <option value="Europe/Paris" {{ ($user->timezone ?? 'Asia/Dubai') === 'Europe/Paris' ? 'selected' : '' }}>فرنسا - باريس (GMT+1)</option>
                                    <option value="Europe/Berlin" {{ ($user->timezone ?? 'Asia/Dubai') === 'Europe/Berlin' ? 'selected' : '' }}>ألمانيا - برلين (GMT+1)</option>
                                    <option value="Europe/Rome" {{ ($user->timezone ?? 'Asia/Dubai') === 'Europe/Rome' ? 'selected' : '' }}>إيطاليا - روما (GMT+1)</option>
                                    <option value="Europe/Madrid" {{ ($user->timezone ?? 'Asia/Dubai') === 'Europe/Madrid' ? 'selected' : '' }}>إسبانيا - مدريد (GMT+1)</option>
                                    <option value="Europe/Amsterdam" {{ ($user->timezone ?? 'Asia/Dubai') === 'Europe/Amsterdam' ? 'selected' : '' }}>هولندا - أمستردام (GMT+1)</option>
                                    <option value="Europe/Brussels" {{ ($user->timezone ?? 'Asia/Dubai') === 'Europe/Brussels' ? 'selected' : '' }}>بلجيكا - بروكسل (GMT+1)</option>
                                    <option value="Europe/Vienna" {{ ($user->timezone ?? 'Asia/Dubai') === 'Europe/Vienna' ? 'selected' : '' }}>النمسا - فيينا (GMT+1)</option>
                                    <option value="Europe/Stockholm" {{ ($user->timezone ?? 'Asia/Dubai') === 'Europe/Stockholm' ? 'selected' : '' }}>السويد - ستوكهولم (GMT+1)</option>
                                    <option value="Europe/Moscow" {{ ($user->timezone ?? 'Asia/Dubai') === 'Europe/Moscow' ? 'selected' : '' }}>روسيا - موسكو (GMT+3)</option>
                                </optgroup>

                                {{-- أمريكا الشمالية --}}
                                <optgroup label="أمريكا الشمالية">
                                    <option value="America/New_York" {{ ($user->timezone ?? 'Asia/Dubai') === 'America/New_York' ? 'selected' : '' }}>الولايات المتحدة - نيويورك (GMT-5)</option>
                                    <option value="America/Chicago" {{ ($user->timezone ?? 'Asia/Dubai') === 'America/Chicago' ? 'selected' : '' }}>الولايات المتحدة - شيكاغو (GMT-6)</option>
                                    <option value="America/Denver" {{ ($user->timezone ?? 'Asia/Dubai') === 'America/Denver' ? 'selected' : '' }}>الولايات المتحدة - دنفر (GMT-7)</option>
                                    <option value="America/Los_Angeles" {{ ($user->timezone ?? 'Asia/Dubai') === 'America/Los_Angeles' ? 'selected' : '' }}>الولايات المتحدة - لوس أنجلوس (GMT-8)</option>
                                    <option value="America/Toronto" {{ ($user->timezone ?? 'Asia/Dubai') === 'America/Toronto' ? 'selected' : '' }}>كندا - تورونتو (GMT-5)</option>
                                    <option value="America/Vancouver" {{ ($user->timezone ?? 'Asia/Dubai') === 'America/Vancouver' ? 'selected' : '' }}>كندا - فانكوفر (GMT-8)</option>
                                    <option value="America/Mexico_City" {{ ($user->timezone ?? 'Asia/Dubai') === 'America/Mexico_City' ? 'selected' : '' }}>المكسيك - مكسيكو سيتي (GMT-6)</option>
                                </optgroup>

                                {{-- أمريكا الجنوبية --}}
                                <optgroup label="أمريكا الجنوبية">
                                    <option value="America/Sao_Paulo" {{ ($user->timezone ?? 'Asia/Dubai') === 'America/Sao_Paulo' ? 'selected' : '' }}>البرازيل - ساو باولو (GMT-3)</option>
                                    <option value="America/Buenos_Aires" {{ ($user->timezone ?? 'Asia/Dubai') === 'America/Buenos_Aires' ? 'selected' : '' }}>الأرجنتين - بوينس آيرس (GMT-3)</option>
                                    <option value="America/Lima" {{ ($user->timezone ?? 'Asia/Dubai') === 'America/Lima' ? 'selected' : '' }}>البيرو - ليما (GMT-5)</option>
                                    <option value="America/Bogota" {{ ($user->timezone ?? 'Asia/Dubai') === 'America/Bogota' ? 'selected' : '' }}>كولومبيا - بوغوتا (GMT-5)</option>
                                </optgroup>

                                {{-- أوقيانوسيا --}}
                                <optgroup label="أوقيانوسيا">
                                    <option value="Australia/Sydney" {{ ($user->timezone ?? 'Asia/Dubai') === 'Australia/Sydney' ? 'selected' : '' }}>أستراليا - سيدني (GMT+10)</option>
                                    <option value="Australia/Melbourne" {{ ($user->timezone ?? 'Asia/Dubai') === 'Australia/Melbourne' ? 'selected' : '' }}>أستراليا - ملبورن (GMT+10)</option>
                                    <option value="Australia/Perth" {{ ($user->timezone ?? 'Asia/Dubai') === 'Australia/Perth' ? 'selected' : '' }}>أستراليا - بيرث (GMT+8)</option>
                                    <option value="Pacific/Auckland" {{ ($user->timezone ?? 'Asia/Dubai') === 'Pacific/Auckland' ? 'selected' : '' }}>نيوزيلندا - أوكلاند (GMT+12)</option>
                                </optgroup>

                                {{-- أفريقيا الأخرى --}}
                                <optgroup label="أفريقيا الأخرى">
                                    <option value="Africa/Johannesburg" {{ ($user->timezone ?? 'Asia/Dubai') === 'Africa/Johannesburg' ? 'selected' : '' }}>جنوب أفريقيا - جوهانسبرغ (GMT+2)</option>
                                    <option value="Africa/Lagos" {{ ($user->timezone ?? 'Asia/Dubai') === 'Africa/Lagos' ? 'selected' : '' }}>نيجيريا - لاغوس (GMT+1)</option>
                                    <option value="Africa/Nairobi" {{ ($user->timezone ?? 'Asia/Dubai') === 'Africa/Nairobi' ? 'selected' : '' }}>كينيا - نيروبي (GMT+3)</option>
                                    <option value="Africa/Addis_Ababa" {{ ($user->timezone ?? 'Asia/Dubai') === 'Africa/Addis_Ababa' ? 'selected' : '' }}>إثيوبيا - أديس أبابا (GMT+3)</option>
                                </optgroup>
                            </select>
                            @error('timezone')
                                <div class="text-danger small mt-1">{{ $message }}</div>
                            @enderror
                            <small class="text-muted mt-1 d-block">
                                <i class="ri-information-line me-1"></i>
                                تُستخدم لتحديد أوقات أذكار الصباح والمساء
                            </small>
                        </div>

                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">
                                <i class="ri-save-line me-1"></i>
                                حفظ التغييرات
                            </button>

                            @if (session('status') === 'profile-updated')
                                <span class="text-success ms-2">
                                    <i class="ri-checkbox-circle-line"></i>
                                    تم الحفظ
                                </span>
                            @endif
                        </div>
                    </div>
                </form>
            </div>
        </div>

        {{-- Update Password --}}
        <div class="card mb-3">
            <div class="card-header">
                <h5 class="card-title mb-0">
                    <i class="ri-lock-password-line me-2"></i>
                    تغيير كلمة المرور
                </h5>
            </div>
            <div class="card-body">
                <form method="post" action="{{ route('password.update') }}">
                    @csrf
                    @method('put')

                    <div class="row g-3">
                        <div class="col-md-4">
                            <label for="current_password" class="form-label">كلمة المرور الحالية</label>
                            <input type="password" class="form-control" id="current_password"
                                   name="current_password" autocomplete="current-password">
                            @error('current_password', 'updatePassword')
                                <div class="text-danger small mt-1">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-4">
                            <label for="password" class="form-label">كلمة المرور الجديدة</label>
                            <input type="password" class="form-control" id="password"
                                   name="password" autocomplete="new-password">
                            @error('password', 'updatePassword')
                                <div class="text-danger small mt-1">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-4">
                            <label for="password_confirmation" class="form-label">تأكيد كلمة المرور</label>
                            <input type="password" class="form-control" id="password_confirmation"
                                   name="password_confirmation" autocomplete="new-password">
                        </div>

                        <div class="col-12">
                            <button type="submit" class="btn btn-warning">
                                <i class="ri-lock-line me-1"></i>
                                تحديث كلمة المرور
                            </button>

                            @if (session('status') === 'password-updated')
                                <span class="text-success ms-2">
                                    <i class="ri-checkbox-circle-line"></i>
                                    تم التحديث
                                </span>
                            @endif
                        </div>
                    </div>
                </form>
            </div>
        </div>

        {{-- Delete Account --}}
        <div class="card border-danger">
            <div class="card-header bg-danger-subtle">
                <h5 class="card-title mb-0 text-danger">
                    <i class="ri-error-warning-line me-2"></i>
                    حذف الحساب
                </h5>
            </div>
            <div class="card-body">
                <p class="text-muted mb-3">
                    عند حذف حسابك، سيتم حذف جميع البيانات والموارد بشكل دائم.
                    قبل الحذف، يرجى تحميل أي بيانات تريد الاحتفاظ بها.
                </p>
                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteAccountModal">
                    <i class="ri-delete-bin-line me-1"></i>
                    حذف الحساب
                </button>
            </div>
        </div>
    </div>
</div>

{{-- Delete Account Modal --}}
<div class="modal fade" id="deleteAccountModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-danger text-white">
                <h5 class="modal-title">
                    <i class="ri-error-warning-line me-2"></i>
                    تأكيد حذف الحساب
                </h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
            </div>
            <form method="post" action="{{ route('profile.destroy') }}">
                @csrf
                @method('delete')
                <div class="modal-body">
                    <p class="text-danger fw-bold">هل أنت متأكد أنك تريد حذف حسابك؟</p>
                    <p class="text-muted">هذا الإجراء لا يمكن التراجع عنه. أدخل كلمة المرور للتأكيد:</p>
                    <input type="password" class="form-control" name="password"
                           placeholder="كلمة المرور" required>
                    @error('password', 'userDeletion')
                        <div class="text-danger small mt-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">إلغاء</button>
                    <button type="submit" class="btn btn-danger">
                        <i class="ri-delete-bin-line me-1"></i>
                        حذف الحساب نهائياً
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
