# Decision OS Dashboard - خطة التنفيذ الكاملة

## 📌 نظرة عامة
خطة تنفيذ نظام Decision OS Dashboard على 10 مراحل - من الصفر حتى MVP جاهز للاستخدام.

**المدة المتوقعة**: 14 يوم عمل
**التقنيات**: Laravel 12 + MySQL + Blade + Tailwind + Vanilla JS

---

## 🔵 المرحلة 0: التحضير والإعداد (يوم 1)

### T0.1 - إعداد قاعدة البيانات
- [ ] تغيير الاتصال من SQLite إلى MySQL في `.env`
- [ ] إنشاء قاعدة البيانات `decision_os`
- [ ] تشغيل `php artisan migrate`

### T0.2 - تثبيت Laravel Breeze
- [ ] `composer require laravel/breeze --dev`
- [ ] `php artisan breeze:install blade`
- [ ] تعديل قوالب Auth لتتوافق مع تصميم Fabkin

### T0.3 - إضافة Profile للمستخدم
- [ ] إنشاء migration: `add_profile_to_users_table`
  ```php
  $table->enum('profile', ['freelancer', 'employee', 'founder'])->default('freelancer');
  ```
- [ ] تحديث `User.php` model
- [ ] إنشاء صفحة اختيار Profile بعد التسجيل

### T0.4 - إنشاء مجلد Services
- [ ] إنشاء `app/Services/`
- [ ] إنشاء Service Provider للـ Services (اختياري)

**الملفات الجديدة:**
```
database/migrations/xxxx_add_profile_to_users_table.php
resources/views/onboarding/profile-select.blade.php
```

---

## 🔵 المرحلة 1: البيانات الأساسية (يوم 2-3)

### T1.1 - جدول Metrics
- [ ] إنشاء migration `create_metrics_table`
  ```php
  Schema::create('metrics', function (Blueprint $table) {
      $table->id();
      $table->string('name');           // "Gym Days"
      $table->string('key')->unique();  // "gym_days"
      $table->string('module');         // "life_discipline"
      $table->string('data_type');      // "integer", "decimal", "boolean"
      $table->json('config')->nullable(); // min, max, target
      $table->timestamps();
  });
  ```
- [ ] إنشاء `Metric.php` Model
- [ ] Seed الـ Metrics الأساسية

### T1.2 - جدول Metric Values
- [ ] إنشاء migration `create_metric_values_table`
  ```php
  Schema::create('metric_values', function (Blueprint $table) {
      $table->id();
      $table->foreignId('user_id')->constrained()->onDelete('cascade');
      $table->foreignId('metric_id')->constrained()->onDelete('cascade');
      $table->decimal('value', 10, 2);
      $table->date('date');
      $table->timestamps();
      
      $table->unique(['user_id', 'metric_id', 'date']);
  });
  ```
- [ ] إنشاء `MetricValue.php` Model
- [ ] إنشاء `MetricController.php` مع CRUD

### T1.3 - واجهة إدخال البيانات
- [ ] إنشاء `resources/views/decision-os/metrics/input.blade.php`
- [ ] Form بسيط لإدخال قيم يومية
- [ ] حفظ في قاعدة البيانات

**الملفات الجديدة:**
```
app/Models/Metric.php
app/Models/MetricValue.php
app/Http/Controllers/MetricController.php
database/migrations/xxxx_create_metrics_table.php
database/migrations/xxxx_create_metric_values_table.php
database/seeders/MetricSeeder.php
resources/views/decision-os/metrics/input.blade.php
```

**Seed Data (الـ Metrics الأساسية):**
```php
// Life & Discipline
['name' => 'Gym Days', 'key' => 'gym_days', 'module' => 'life_discipline', 'data_type' => 'integer'],
['name' => 'Work Hours', 'key' => 'avg_work_hours', 'module' => 'life_discipline', 'data_type' => 'decimal'],
['name' => 'Rest Days', 'key' => 'rest_days', 'module' => 'life_discipline', 'data_type' => 'integer'],

// Financial Safety
['name' => 'Monthly Income', 'key' => 'income', 'module' => 'financial_safety', 'data_type' => 'decimal'],
['name' => 'Monthly Expenses', 'key' => 'expenses', 'module' => 'financial_safety', 'data_type' => 'decimal'],
['name' => 'Savings', 'key' => 'savings', 'module' => 'financial_safety', 'data_type' => 'decimal'],
```

---

## 🔵 المرحلة 2: Modules الأساسية (يوم 3-4)

### T2.1 - Life & Discipline Module
- [ ] إنشاء `LifeDisciplineService.php`
  ```php
  class LifeDisciplineService {
      public function getStatus(User $user): string // green|yellow|red
      public function getKPIs(User $user): array
      public function getInsights(User $user): array
  }
  ```
- [ ] عرض البيانات في Dashboard

### T2.2 - Financial Safety Module
- [ ] إنشاء `FinancialSafetyService.php`
- [ ] إنشاء `RunwayCalculator.php`
  ```php
  // Runway = Savings / Monthly Expenses
  public function calculate(User $user): float
  ```
- [ ] عرض Runway + Status

### T2.3 - Focus System
- [ ] إنشاء migration `create_tasks_table`
  ```php
  Schema::create('tasks', function (Blueprint $table) {
      $table->id();
      $table->foreignId('user_id')->constrained();
      $table->string('title');
      $table->enum('type', ['one_thing', 'top_3']);
      $table->boolean('completed')->default(false);
      $table->date('date');
      $table->timestamps();
  });
  ```
- [ ] إنشاء `Task.php` Model
- [ ] إنشاء `TaskController.php`
- [ ] واجهة Today One Thing + Mark as Done

**الملفات الجديدة:**
```
app/Services/LifeDisciplineService.php
app/Services/FinancialSafetyService.php
app/Services/RunwayCalculator.php
app/Services/FocusSystemService.php
app/Models/Task.php
app/Http/Controllers/TaskController.php
database/migrations/xxxx_create_tasks_table.php
```

---

## 🔵 المرحلة 3: Pomodoro System (يوم 5-6)

### T3.1 - Pomodoro Timer (JavaScript)
- [ ] إنشاء `public/assets/js/pomodoro-timer.js`
  ```javascript
  class PomodoroTimer {
      constructor(options) {
          this.focusDuration = options.focus || 25 * 60;
          this.breakDuration = options.break || 5 * 60;
          this.longBreakDuration = options.longBreak || 15 * 60;
      }
      start() {}
      pause() {}
      stop() {}
      onComplete(callback) {}
      onInterrupt(callback) {}
  }
  ```
- [ ] ربط Timer بالـ UI

### T3.2 - Pomodoro Backend
- [ ] إنشاء migration `create_pomodoro_sessions_table`
  ```php
  Schema::create('pomodoro_sessions', function (Blueprint $table) {
      $table->id();
      $table->foreignId('user_id')->constrained();
      $table->foreignId('task_id')->nullable()->constrained();
      $table->integer('duration'); // بالثواني
      $table->enum('status', ['completed', 'interrupted']);
      $table->tinyInteger('energy_before')->nullable();
      $table->tinyInteger('energy_after')->nullable();
      $table->timestamps();
  });
  ```
- [ ] إنشاء `PomodoroSession.php` Model
- [ ] إنشاء `PomodoroController.php` (API endpoint)

### T3.3 - Pomodoro KPIs
- [ ] حساب `pomodoros_per_day`
- [ ] حساب `focus_minutes`
- [ ] حساب `interruption_rate`

**الملفات الجديدة:**
```
public/assets/js/pomodoro-timer.js
app/Models/PomodoroSession.php
app/Http/Controllers/PomodoroController.php
database/migrations/xxxx_create_pomodoro_sessions_table.php
resources/views/decision-os/components/pomodoro-timer.blade.php
```

---

## 🔵 المرحلة 4: Status Engine (يوم 6-7)

### T4.1 - StatusService
- [ ] إنشاء `app/Services/StatusService.php`
  ```php
  class StatusService {
      public function getModuleStatus(User $user, string $module): string
      public function getAllStatuses(User $user): array
      public function getRedCount(User $user): int
      public function isGloballyLocked(User $user): bool
  }
  ```

### T4.2 - قواعد Status لكل Module
```php
// Life & Discipline
if ($gymDays >= 3 && $restDays >= 1) return 'green';
if ($gymDays >= 1) return 'yellow';
return 'red';

// Financial Safety
if ($income >= $expenses && $runway >= 3) return 'green';
if ($runway >= 1) return 'yellow';
return 'red';

// Focus System
if ($completedTasks >= 5) return 'green'; // per week
if ($completedTasks >= 2) return 'yellow';
return 'red';

// Pomodoro
if ($pomodorosPerDay >= 6 && $interruptionRate < 0.3) return 'green';
if ($pomodorosPerDay >= 3) return 'yellow';
return 'red';
```

### T4.3 - Global Lock
- [ ] إذا `getRedCount() >= 2` → النظام مقفل
- [ ] إظهار رسالة تحذير واضحة
- [ ] منع الوصول لـ Business Module

**الملفات الجديدة:**
```
app/Services/StatusService.php
```

---

## 🔵 المرحلة 5: Insights Engine (يوم 7-8)

### T5.1 - InsightService
- [ ] إنشاء `app/Services/InsightService.php`
  ```php
  class InsightService {
      public function getActiveInsights(User $user): Collection
      public function getTopWarnings(User $user, int $limit = 3): Collection
  }
  ```

### T5.2 - الـ 10 Rules الأساسية
```php
private array $rules = [
    // Financial
    ['condition' => 'income < expenses', 'message' => 'تصرف أكثر مما تربح', 'severity' => 'red'],
    ['condition' => 'runway < 1', 'message' => 'Runway أقل من شهر', 'severity' => 'red'],
    ['condition' => 'income_unstable', 'message' => 'دخل غير مستقر', 'severity' => 'yellow'],
    
    // Life
    ['condition' => 'work_streak >= 10', 'message' => '10 أيام بدون راحة → Burnout Risk', 'severity' => 'red'],
    ['condition' => 'avg_work_hours > 10', 'message' => 'ساعات عمل مرتفعة', 'severity' => 'yellow'],
    ['condition' => 'gym_days == 0 for 2 weeks', 'message' => 'انضباط جسدي منخفض', 'severity' => 'red'],
    
    // Focus
    ['condition' => 'pomodoros < 3 for 3 days', 'message' => 'تركيز منخفض جداً', 'severity' => 'red'],
    ['condition' => 'interruption_rate > 0.4', 'message' => 'مقاطعات كثيرة → Cognitive Fatigue', 'severity' => 'yellow'],
    
    // Review
    ['condition' => 'no_weekly_review for 2 weeks', 'message' => 'أسبوعين بدون مراجعة', 'severity' => 'yellow'],
    
    // Global
    ['condition' => 'red_count >= 2', 'message' => '⚠️ النظام مقفل - أصلح الأحمر أولاً', 'severity' => 'red'],
];
```

### T5.3 - Warnings Box Component
- [ ] إنشاء `resources/views/decision-os/components/warnings-box.blade.php`
- [ ] عرض Top 3 تحذيرات
- [ ] ترتيب حسب الخطورة (red أولاً)

**الملفات الجديدة:**
```
app/Services/InsightService.php
resources/views/decision-os/components/warnings-box.blade.php
```

---

## 🔵 المرحلة 6: Burnout Monitor (يوم 8-9)

### T6.1 - BurnoutService
- [ ] إنشاء `app/Services/BurnoutService.php`
  ```php
  class BurnoutService {
      public function calculateRisk(User $user): string // low|medium|high
      
      private function getWorkStreak(User $user): int
      private function getAvgWorkHours(User $user): float
      private function getPomodoroLoad(User $user): int
      private function getRestDays(User $user): int
  }
  ```

### T6.2 - منطق الحساب
```php
public function calculateRisk(User $user): string {
    $score = 0;
    
    if ($this->getWorkStreak($user) >= 10) $score += 3;
    elseif ($this->getWorkStreak($user) >= 7) $score += 2;
    
    if ($this->getAvgWorkHours($user) > 10) $score += 3;
    elseif ($this->getAvgWorkHours($user) > 8) $score += 1;
    
    if ($this->getPomodoroLoad($user) > 10) $score += 2;
    
    if ($this->getRestDays($user) == 0) $score += 3;
    
    if ($score >= 7) return 'high';
    if ($score >= 4) return 'medium';
    return 'low';
}
```

**الملفات الجديدة:**
```
app/Services/BurnoutService.php
resources/views/decision-os/components/burnout-indicator.blade.php
```

---

## 🔵 المرحلة 7: Weekly Review (يوم 9-10)

### T7.1 - جدول Weekly Reviews
- [ ] إنشاء migration `create_weekly_reviews_table`
  ```php
  Schema::create('weekly_reviews', function (Blueprint $table) {
      $table->id();
      $table->foreignId('user_id')->constrained();
      $table->json('kpi_snapshot');      // صورة من KPIs
      $table->text('what_worked')->nullable();
      $table->text('what_failed')->nullable();
      $table->text('next_week_focus')->nullable();
      $table->date('week_start');
      $table->timestamps();
  });
  ```

### T7.2 - WeeklyReviewController
- [ ] إنشاء Controller مع:
  - `create()` - عرض Form
  - `store()` - حفظ Review
  - `show()` - عرض Review سابق

### T7.3 - Review Tracking
- [ ] حساب Streak (أسابيع متتالية)
- [ ] تحذير إذا لم يتم Review لأسبوعين

**الملفات الجديدة:**
```
app/Models/WeeklyReview.php
app/Http/Controllers/WeeklyReviewController.php
database/migrations/xxxx_create_weekly_reviews_table.php
resources/views/decision-os/weekly-review/form.blade.php
resources/views/decision-os/weekly-review/show.blade.php
```

---

## 🔵 المرحلة 8: Dashboard النهائي (يوم 10-11)

### T8.1 - تصميم الصفحة الرئيسية
Layout من الأعلى للأسفل:
```
┌─────────────────────────────────────────────┐
│  Today One Thing + Pomodoro Timer           │
├─────────────────────────────────────────────┤
│  ⚠️ Warnings Box (Top 3)                    │
├─────────────────────────────────────────────┤
│  Module Cards (4 cards with Status)         │
│  ┌─────────┐ ┌─────────┐ ┌─────────┐ ┌─────┐│
│  │Life 🟢  │ │Finance🟡│ │Focus 🟢 │ │Pomo │
│  └─────────┘ └─────────┘ └─────────┘ └─────┘│
├─────────────────────────────────────────────┤
│  Quick KPIs (≤12 أرقام)                     │
├─────────────────────────────────────────────┤
│  Weekly Review CTA                          │
└─────────────────────────────────────────────┘
```

### T8.2 - DecisionDashboardController
- [ ] إنشاء Controller رئيسي يجمع كل البيانات
  ```php
  class DecisionDashboardController extends Controller {
      public function index() {
          return view('decision-os.dashboard', [
              'todayTask' => $this->focusService->getTodayTask(auth()->user()),
              'warnings' => $this->insightService->getTopWarnings(auth()->user()),
              'moduleStatuses' => $this->statusService->getAllStatuses(auth()->user()),
              'kpis' => $this->getQuickKPIs(auth()->user()),
              'burnoutRisk' => $this->burnoutService->calculateRisk(auth()->user()),
              'weeklyReviewDue' => $this->isWeeklyReviewDue(auth()->user()),
          ]);
      }
  }
  ```

### T8.3 - Components
- [ ] `module-card.blade.php` - كارت Module مع Status
- [ ] `kpi-widget.blade.php` - رقم واحد مع label
- [ ] `weekly-review-cta.blade.php` - زر المراجعة

**الملفات الجديدة:**
```
app/Http/Controllers/DecisionDashboardController.php
resources/views/decision-os/dashboard.blade.php
resources/views/decision-os/components/module-card.blade.php
resources/views/decision-os/components/kpi-widget.blade.php
resources/views/decision-os/components/weekly-review-cta.blade.php
```

---

## 🔵 المرحلة 9: Locking System (يوم 11-12)

### T9.1 - LockingService
- [ ] إنشاء `app/Services/LockingService.php`
  ```php
  class LockingService {
      public function isLocked(User $user): bool
      public function getLockedModules(): array
      public function getAllowedActions(): array
  }
  ```

### T9.2 - Middleware للقفل
- [ ] إنشاء `CheckGlobalLock` middleware
- [ ] تطبيقه على routes المحددة

### T9.3 - UI للقفل
- [ ] رسالة واضحة عند محاولة الوصول لـ module مقفل
- [ ] إظهار ما يجب إصلاحه

**الملفات الجديدة:**
```
app/Services/LockingService.php
app/Http/Middleware/CheckGlobalLock.php
```

---

## 🔵 المرحلة 10: Demo & Finalization (يوم 12-14)

### T10.1 - Seed Demo Data
- [ ] سيناريو 1: مستخدم في خطر مالي (🔴 Finance)
- [ ] سيناريو 2: مستخدم مرهق (🔴 Burnout)
- [ ] سيناريو 3: أسبوع مثالي (🟢 الكل)

### T10.2 - تحديث Sidebar
- [ ] إضافة قسم Decision OS في `sidebar.blade.php`
  ```blade
  <li class="pe-menu-title">Decision OS</li>
  <li><a href="/decision-os">Dashboard</a></li>
  <li><a href="/decision-os/metrics">إدخال البيانات</a></li>
  <li><a href="/decision-os/weekly-review">المراجعة الأسبوعية</a></li>
  ```

### T10.3 - تحديث Routes
- [ ] إضافة routes في `web.php`
  ```php
  Route::middleware(['auth'])->prefix('decision-os')->group(function () {
      Route::get('/', [DecisionDashboardController::class, 'index']);
      Route::resource('metrics', MetricController::class);
      Route::resource('tasks', TaskController::class);
      Route::post('pomodoro', [PomodoroController::class, 'store']);
      Route::resource('weekly-review', WeeklyReviewController::class);
  });
  ```

### T10.4 - Testing & QA
- [ ] اختبار كل Rule من الـ 10 Rules
- [ ] اختبار الـ Locking System
- [ ] اختبار Pomodoro Timer
- [ ] مراجعة UI على مختلف الشاشات

### T10.5 - Documentation
- [ ] تحديث `copilot-instructions.md`
- [ ] README للمشروع

---

## 📊 ملخص الملفات الجديدة

### Migrations (7)
```
create_metrics_table.php
create_metric_values_table.php
create_tasks_table.php
create_pomodoro_sessions_table.php
create_weekly_reviews_table.php
add_profile_to_users_table.php
```

### Models (6)
```
Metric.php
MetricValue.php
Task.php
PomodoroSession.php
WeeklyReview.php
```

### Services (8)
```
StatusService.php
InsightService.php
BurnoutService.php
LockingService.php
RunwayCalculator.php
LifeDisciplineService.php
FinancialSafetyService.php
FocusSystemService.php
```

### Controllers (5)
```
DecisionDashboardController.php
MetricController.php
TaskController.php
PomodoroController.php
WeeklyReviewController.php
```

### Views (~15)
```
decision-os/
├── dashboard.blade.php
├── components/
│   ├── today-one-thing.blade.php
│   ├── pomodoro-timer.blade.php
│   ├── warnings-box.blade.php
│   ├── module-card.blade.php
│   ├── kpi-widget.blade.php
│   ├── weekly-review-cta.blade.php
│   └── burnout-indicator.blade.php
├── metrics/
│   └── input.blade.php
└── weekly-review/
    ├── form.blade.php
    └── show.blade.php
onboarding/
└── profile-select.blade.php
```

---

## ✅ Definition of Done

- [ ] المستخدم يفهم وضعه خلال 30 ثانية
- [ ] النظام يقول "توقّف" عند الخطر
- [ ] Red لا يمكن تجاهله
- [ ] Onboarding ≤ 3 دقائق
- [ ] إدخال يدوي سهل
- [ ] Status لكل Module
- [ ] Pomodoro يعمل ومربوط
- [ ] Insights واضحة
- [ ] Weekly Review يعمل
- [ ] UI بسيط ونظيف

---

## 🧠 القاعدة الذهبية للمبرمج

> **أي Task لا ينتج Status أو Insight → يؤجّل**

---

## 📅 الجدول الزمني

| الأسبوع | المراحل | الهدف |
|---------|---------|-------|
| Week 1 (Days 1-7) | 0-4 | البنية التحتية + إدخال بيانات + Status Engine |
| Week 2 (Days 8-14) | 5-10 | Insights + Burnout + Review + UI + Demo |
