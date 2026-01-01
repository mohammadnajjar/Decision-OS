# خطة: إضافة نظام حساب الزكاة في Decision OS

نظام شرعي وعملي لحساب الزكاة تلقائيًا، مدمج مع الأمان المالي الحالي، بدون تعقيد فقهي وبتنبيهات أخلاقية واضحة.

---

## الخطوات

### 1. إنشاء Migration وModels لنظام الزكاة

- جدول `zakat_settings` في `database/migrations/` بحقول:
  - `user_id` (FK)
  - `enabled` (boolean, default: false)
  - `hawl_start_date` (date) - تاريخ بلوغ النصاب أول مرة
  - `nisab_gold_price` (decimal) - سعر غرام الذهب
  - `currency` (string, default: user's currency)
  - `calculation_method` (enum: 'hijri_year', 'gregorian_year')
  - `include_receivable_debts` (boolean, default: false)

- جدول `zakat_payments` لتسجيل الدفعات:
  - `user_id` (FK)
  - `amount` (decimal)
  - `payment_date` (date)
  - `hijri_year` (string, nullable)
  - `notes` (text, nullable)

- Model `ZakatSetting` و `ZakatPayment` في `app/Models/`
- علاقات: `User hasOne ZakatSetting`, `User hasMany ZakatPayments`

---

### 2. إنشاء ZakatService لمنطق الحساب

ملف `app/Services/ZakatService.php` بـ methods:

```php
// حساب الأصول الزكوية
calculateZakatableAssets(User $user): float
// المعادلة: مجموع أرصدة الحسابات الزكوية - الديون المستحقة علي

// حساب قيمة النصاب
getNisabValue(float $goldPrice): float
// المعادلة: 85 × سعر غرام الذهب

// فحص بلوغ النصاب
isNisabReached(User $user): bool

// فحص مرور الحول
isHawlComplete(User $user): bool
// hijri: 354 يوم، gregorian: 365 يوم من hawl_start_date

// حساب الزكاة المستحقة
calculateZakatDue(User $user): ?float
// إذا تحققت الشروط: zakatableAssets × 0.025

// حساب الأيام المتبقية للحول
getDaysUntilHawl(User $user): int

// الحصول على حالة الزكاة
getZakatStatus(User $user): string
// 'not_applicable' | 'not_due' | 'approaching' | 'due'
```

ربط مع:
- `Account::where('is_zakatable', true)->sum('balance')` لحساب الأصول
- `Debt::where('type', 'payable')->sum('remaining_amount')` للخصم

---

### 3. تعديل StatusService وInsightService للزكاة

**في `app/Services/InsightService.php`:**

قاعدة جديدة `'zakat_due'`:
```php
[
    'key' => 'zakat_due',
    'condition' => fn($user) => $zakatService->getZakatStatus($user) === 'due',
    'message' => 'الزكاة مستحقة تقديرًا ({amount}) – راجع عالم للتأكد',
    'severity' => 'info',  // ليس red، تنبيه أخلاقي فقط
    'module' => 'financial_safety',
]

[
    'key' => 'zakat_approaching',
    'condition' => fn($user) => $zakatService->getZakatStatus($user) === 'approaching',
    'message' => 'اقترب موعد الزكاة – بقي {days} يوم',
    'severity' => 'info',
    'module' => 'financial_safety',
]
```

**في `app/Services/StatusService.php`:**
- لا تأثير على Status الأحمر (الزكاة لا تُحمّر الحالة)
- إخراج الزكاة = Boost للـ Financial Discipline (اختياري)

---

### 4. إضافة صفحات UI لإدارة الزكاة

**الملفات:**

```
resources/views/decision-os/zakat/
├── settings.blade.php    # إعدادات الزكاة
├── dashboard.blade.php   # لوحة الزكاة الرئيسية
└── history.blade.php     # سجل الدفعات
```

**settings.blade.php:**
- تفعيل/إيقاف الزكاة
- تاريخ بداية الحول (hawl_start_date)
- سعر غرام الذهب (إدخال يدوي)
- العملة
- طريقة الحساب (هجري/ميلادي)
- خيار: "احسب الديون لي"

**dashboard.blade.php:**
- Status Card: 🟢 لا تُستحق / 🟡 قريبة / 🔴 مستحقة
- الأصول الزكوية (Breakdown)
- قيمة النصاب الحالي
- المبلغ المستحق (إذا واجب)
- عداد: أيام متبقية للحول
- زر "سجّلت دفع الزكاة"
- ⚠️ تنبيه شرعي ثابت: "هذا الحساب تقديري – راجع عالم شرعي للتأكد"

**history.blade.php:**
- جدول الدفعات السابقة
- إمكانية إضافة ملاحظات

---

### 5. تحديث Dashboard وRouting

**في `app/Http/Controllers/DecisionDashboardController.php`:**
- إضافة KPI "الزكاة المقدرة" إذا enabled
- عرض Status الزكاة في Quick KPIs

**في `routes/web.php`:**
```php
Route::prefix('zakat')->group(function () {
    Route::get('/settings', [ZakatController::class, 'settings']);
    Route::post('/settings', [ZakatController::class, 'updateSettings']);
    Route::get('/dashboard', [ZakatController::class, 'dashboard']);
    Route::get('/history', [ZakatController::class, 'history']);
    Route::post('/pay', [ZakatController::class, 'recordPayment']);
});
```

**في `resources/views/partials/sidebar.blade.php`:**
- قسم "الزكاة" تحت Financial Safety
- يظهر فقط إذا `zakat_settings.enabled = true`

**Dashboard Card جديد:**
```
┌─────────────────────────────┐
│ 🕌 الزكاة                   │
├─────────────────────────────┤
│ الحالة: 🟢 لا تُستحق        │
│ الأصول الزكوية: 12,500 ر.س  │
│ النصاب: 5,950 ر.س           │
│ الحول: 45 يوم متبقي         │
└─────────────────────────────┘
```

---

### 6. إضافة تفريق Asset Types في Accounts

**Migration جديد:**
```php
// xxxx_add_zakatable_to_accounts.php
$table->boolean('is_zakatable')->default(true);
```

**في `app/Models/Account.php`:**
```php
public function scopeZakatable($query)
{
    return $query->where('is_zakatable', true);
}
```

**في ZakatService:**
```php
$zakatableBalance = Account::where('user_id', $user->id)
    ->zakatable()
    ->sum('balance');
```

**في UI إنشاء/تعديل Account:**
- Checkbox: "يدخل في حساب الزكاة"
- نص توضيحي: "الأصول الثابتة وأدوات العمل لا تُزكى"

---

## ملاحظات إضافية

### التقويم الهجري
- **Option A:** استخدام package `arabcoders/hijri-dates`
- **Option B:** حساب يدوي (السنة الهجرية ≈ 354 يوم)
- **Option C (الأبسط):** اعتماد سنة ميلادية (365 يوم) كتقدير

**التوصية:** Option B أو C لتجنب dependencies خارجية

### سعر الذهب
- إدخال يدوي فقط (no integrations)
- يمكن تحديثه شهريًا من قبل المستخدم
- عرض تاريخ آخر تحديث

### المدخرات (Savings)
- **Option A:** احسب `MetricValue::getLatestForUser('savings')` مع cash_on_hand
- **Option B:** أنشئ Account type جديد `savings`
- **Option C (الأبسط):** اعتبر Savings جزء من أرصدة الحسابات

**التوصية:** Option C - المستخدم يضع مدخراته في حساب منفصل

### الديون المستحقة لي (Receivable)
- حاليًا لا تُحسب افتراضيًا
- Checkbox في Settings: "احسب الديون لي" (اختياري)
- تنبيه: "بعض العلماء لا يوجبون زكاة الدين"

### Testing
إضافة Feature Test: `ZakatCalculationTest`
```php
// مثال
$user->accounts()->create(['balance' => 10000, 'is_zakatable' => true]);
$user->debts()->create(['type' => 'payable', 'remaining_amount' => 2000]);
// zakatable = 8000, nisab = 5950, zakat = 200
$this->assertEquals(200, $zakatService->calculateZakatDue($user));
```

---

## الـ Insights الخاصة بالزكاة

| الحالة | الرسالة | النوع |
|--------|---------|-------|
| مالك تحت النصاب | "لا زكاة عليك هذا العام" | info |
| اقترب الحول (30 يوم) | "اقترب موعد الزكاة – حضّر {amount}" | info |
| الزكاة واجبة | "الزكاة مستحقة تقديرًا ({amount})" | info |
| تم الدفع | "بارك الله في مالك – سجلت دفع الزكاة" | success |
| انخفض المال تحت النصاب | "انخفض مالك تحت النصاب – لا زكاة" | info |

---

## التنبيهات الشرعية (إلزامية)

⚠️ **يجب عرضها دائمًا في صفحات الزكاة:**

> "هذا الحساب تقديري لمساعدتك في التخطيط المالي.
> يرجى مراجعة عالم شرعي أو جهة موثوقة للتأكد من المبلغ الصحيح.
> النظام لا يحدد جهة الدفع ولا يُصدر فتوى."

---

## ملخص الملفات المطلوبة

| النوع | الملف |
|-------|-------|
| Migration | `xxxx_create_zakat_settings_table.php` |
| Migration | `xxxx_create_zakat_payments_table.php` |
| Migration | `xxxx_add_zakatable_to_accounts.php` |
| Model | `app/Models/ZakatSetting.php` |
| Model | `app/Models/ZakatPayment.php` |
| Service | `app/Services/ZakatService.php` |
| Controller | `app/Http/Controllers/ZakatController.php` |
| View | `resources/views/decision-os/zakat/settings.blade.php` |
| View | `resources/views/decision-os/zakat/dashboard.blade.php` |
| View | `resources/views/decision-os/zakat/history.blade.php` |
| Test | `tests/Feature/ZakatCalculationTest.php` |

---

## حالة التنفيذ

- [x] 1. إنشاء Migration وModels
- [x] 2. إنشاء ZakatService
- [x] 3. تعديل InsightService
- [x] 4. إنشاء ZakatController
- [x] 5. إنشاء صفحات UI
- [x] 6. تحديث Sidebar
- [x] 7. إضافة Dashboard Card
- [x] 8. إضافة is_zakatable للحسابات
- [x] 9. كتابة Tests
- [x] 10. التوثيق

## تاريخ التنفيذ: 2 يناير 2026

### الملفات المنشأة:

**Migrations:**
- `database/migrations/2026_01_02_000001_create_zakat_settings_table.php`
- `database/migrations/2026_01_02_000002_create_zakat_payments_table.php`
- `database/migrations/2026_01_02_000003_add_is_zakatable_to_accounts_table.php`

**Models:**
- `app/Models/ZakatSetting.php`
- `app/Models/ZakatPayment.php`

**Service:**
- `app/Services/ZakatService.php`

**Controller:**
- `app/Http/Controllers/ZakatController.php`

**Views:**
- `resources/views/decision-os/zakat/dashboard.blade.php`
- `resources/views/decision-os/zakat/settings.blade.php`
- `resources/views/decision-os/zakat/history.blade.php`

**Translations:**
- `lang/ar/zakat.php`
- `lang/en/zakat.php`

**Tests:**
- `tests/Feature/ZakatCalculationTest.php`

### الملفات المعدّلة:
- `app/Models/User.php` - إضافة علاقات الزكاة
- `app/Models/Account.php` - إضافة is_zakatable وscope
- `app/Services/InsightService.php` - إضافة قواعد تنبيهات الزكاة
- `routes/web.php` - إضافة مسارات الزكاة
- `resources/views/partials/sidebar.blade.php` - إضافة رابط الزكاة
- `lang/ar/app.php` - إضافة ترجمة nav.zakat
