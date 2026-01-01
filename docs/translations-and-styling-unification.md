# توحيد الستايل والترجمات
## تاريخ التعديل: {{ التاريخ }}

---

## وصف التعديل

تم توحيد نظام الألوان والأيقونات في كل صفحات Decision OS، وإنشاء نظام ترجمة كامل يدعم العربية والإنجليزية.

---

## الملفات المُنشأة

### 1. ملف الإعدادات الموحد
**المسار:** `config/decisionos.php`

يحتوي على:
- **الألوان الأساسية** (primary, success, warning, danger, info)
- **ألوان الحالات** (green, yellow, red)
- **ألوان الوحدات** (discipline, financial, focus, pomodoro, quran, goals)
- **الأيقونات** (Remix Icons لكل عنصر)
- **الأهداف** (targets) - المعايير المستهدفة لكل KPI
- **إعدادات الحالات** - التسميات والألوان لـ green/yellow/red

### 2. ملفات الترجمة
**المسار:** `lang/ar/app.php` و `lang/en/app.php`

تحتوي على أكثر من 300 مفتاح ترجمة موزعة على:
- `general` - العام (حفظ، إلغاء، حذف، إلخ)
- `nav` - عناصر التنقل
- `modules` - أسماء الوحدات
- `status` - حالات النظام
- `tasks` - نظام المهام
- `pomodoro` - نظام بومودورو
- `financial` - الأمان المالي
- `discipline` - الانضباط والصحة
- `quran` - ختمة القرآن
- `weekly_review` - المراجعة الأسبوعية
- `goals` - الأهداف
- `decisions` - سجل القرارات
- `burnout` - مؤشر الإرهاق
- `insights` - التنبيهات
- `profile` - الملف الشخصي
- `auth` - المصادقة
- `time` - الوقت

### 3. Helper Class
**المسار:** `app/Helpers/DecisionOSHelper.php`

يوفر دوال مساعدة:
- `getStatusColors($status)` - ألوان الحالة
- `getIcon($key)` - أيقونة العنصر
- `getModuleColor($module)` - لون الوحدة
- `getTarget($key)` - القيمة المستهدفة
- `formatCurrency($amount, $currency)` - تنسيق العملة
- `getProgressColor($percentage)` - لون التقدم
- `statusBadge($status, $text)` - شارة الحالة HTML
- `t($key, $params)` - اختصار للترجمة

---

## الملفات المُعدَّلة

### 1. sidebar.blade.php
- استبدال جميع النصوص العربية بـ `__('app.nav.xxx')`
- توحيد الأيقونات

### 2. dashboard.blade.php
- استخدام الترجمات في العنوان والأزرار
- استخدام `__('app.modules.xxx')` لأسماء الوحدات

### 3. composer.json
- إضافة `app/Helpers/DecisionOSHelper.php` إلى autoload files

---

## طريقة الاستخدام

### في Blade:
```blade
{{-- نص مترجم --}}
{{ __('app.nav.dashboard') }}

{{-- مع متغيرات --}}
{{ __('app.tasks.completed_count', ['count' => 5]) }}
```

### في PHP:
```php
use App\Helpers\DecisionOSHelper;

// الحصول على ألوان الحالة
$colors = DecisionOSHelper::getStatusColors('green');
// returns: ['bg' => 'bg-success', 'text' => 'text-success', 'subtle' => 'bg-success-subtle']

// إنشاء شارة
echo DecisionOSHelper::statusBadge('green', 'ممتاز');
// returns: <span class="badge bg-success-subtle text-success">ممتاز</span>

// تنسيق العملة
echo DecisionOSHelper::formatCurrency(1500);
// returns: $1,500
```

### في Config:
```php
// الحصول على اللون
config('decisionos.colors.primary');

// الحصول على الأيقونة
config('decisionos.icons.dashboard');

// الحصول على الهدف
config('decisionos.targets.gym_hours_weekly');
```

---

## تغيير اللغة

في `config/app.php`:
```php
'locale' => 'ar',     // للعربية
// أو
'locale' => 'en',     // للإنجليزية
```

---

## سبب التعديل

1. **التوحيد**: ضمان تناسق الألوان والأيقونات في كل الصفحات
2. **قابلية الترجمة**: دعم لغات متعددة بسهولة
3. **سهولة الصيانة**: تغيير اللون أو النص من مكان واحد
4. **إعادة الاستخدام**: Helper functions تقلل تكرار الكود

---

## الخطوات التالية

1. تطبيق الترجمات على بقية الصفحات
2. إضافة زر تبديل اللغة في Header
3. حفظ اللغة المفضلة للمستخدم في الـ profile
