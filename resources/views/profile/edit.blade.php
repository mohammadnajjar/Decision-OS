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
                <div class="d-flex justify-content-between mb-2">
                    <span class="text-muted">الرصيد المتاح</span>
                    <span class="fw-bold {{ $user->cash_on_hand >= 0 ? 'text-success' : 'text-danger' }}">
                        ${{ number_format($user->cash_on_hand ?? 0, 2) }}
                    </span>
                </div>
                <div class="d-flex justify-content-between mb-2">
                    <span class="text-muted">العملة</span>
                    <span>{{ $user->currency ?? 'USD' }}</span>
                </div>
                <div class="d-flex justify-content-between">
                    <span class="text-muted">Onboarding</span>
                    <span class="badge {{ $user->onboarding_completed ? 'bg-success' : 'bg-warning' }}">
                        {{ $user->onboarding_completed ? 'مكتمل' : 'غير مكتمل' }}
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
                            <label for="timezone" class="form-label">المنطقة الزمنية</label>
                            <select name="timezone" id="timezone" class="form-select">
                                <option value="Asia/Dubai" {{ ($user->timezone ?? 'Asia/Dubai') === 'Asia/Dubai' ? 'selected' : '' }}>دبي (GMT+4)</option>
                                <option value="Asia/Riyadh" {{ ($user->timezone ?? 'Asia/Dubai') === 'Asia/Riyadh' ? 'selected' : '' }}>الرياض (GMT+3)</option>
                                <option value="Asia/Kuwait" {{ ($user->timezone ?? 'Asia/Dubai') === 'Asia/Kuwait' ? 'selected' : '' }}>الكويت (GMT+3)</option>
                                <option value="Asia/Qatar" {{ ($user->timezone ?? 'Asia/Dubai') === 'Asia/Qatar' ? 'selected' : '' }}>قطر (GMT+3)</option>
                                <option value="Asia/Bahrain" {{ ($user->timezone ?? 'Asia/Dubai') === 'Asia/Bahrain' ? 'selected' : '' }}>البحرين (GMT+3)</option>
                                <option value="Asia/Baghdad" {{ ($user->timezone ?? 'Asia/Dubai') === 'Asia/Baghdad' ? 'selected' : '' }}>بغداد (GMT+3)</option>
                                <option value="Africa/Cairo" {{ ($user->timezone ?? 'Asia/Dubai') === 'Africa/Cairo' ? 'selected' : '' }}>القاهرة (GMT+2)</option>
                                <option value="Asia/Amman" {{ ($user->timezone ?? 'Asia/Dubai') === 'Asia/Amman' ? 'selected' : '' }}>عمان (GMT+3)</option>
                                <option value="Asia/Damascus" {{ ($user->timezone ?? 'Asia/Dubai') === 'Asia/Damascus' ? 'selected' : '' }}>دمشق (GMT+3)</option>
                                <option value="Asia/Beirut" {{ ($user->timezone ?? 'Asia/Dubai') === 'Asia/Beirut' ? 'selected' : '' }}>بيروت (GMT+3)</option>
                                <option value="Europe/London" {{ ($user->timezone ?? 'Asia/Dubai') === 'Europe/London' ? 'selected' : '' }}>لندن (GMT+0)</option>
                                <option value="America/New_York" {{ ($user->timezone ?? 'Asia/Dubai') === 'America/New_York' ? 'selected' : '' }}>نيويورك (GMT-5)</option>
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
