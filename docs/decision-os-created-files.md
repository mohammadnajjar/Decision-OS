# Decision OS - ملخص الملفات المنشأة

## 📅 تاريخ الإنشاء: 31 ديسمبر 2025

---

## 📁 الملفات المنشأة

### 🗄️ Migrations (قاعدة البيانات)

| الملف | الوصف |
|-------|-------|
| `2025_01_01_000001_add_profile_to_users_table.php` | إضافة حقل profile للمستخدم (freelancer/employee/founder) |
| `2025_01_01_000002_create_metrics_table.php` | جدول تعريفات المقاييس (name, key, module, data_type) |
| `2025_01_01_000003_create_metric_values_table.php` | جدول قيم المقاييس (user_id, metric_id, value, date) |
| `2025_01_01_000004_create_tasks_table.php` | جدول المهام (Today One Thing + Top 3) |
| `2025_01_01_000005_create_pomodoro_sessions_table.php` | جدول جلسات Pomodoro |
| `2025_01_01_000006_create_weekly_reviews_table.php` | جدول المراجعات الأسبوعية |

---

### 📦 Models

| الملف | الوصف |
|-------|-------|
| `app/Models/Metric.php` | Model للمقاييس - يحتوي على helper methods للحصول على القيم |
| `app/Models/MetricValue.php` | Model لقيم المقاييس - مع static methods للإحصائيات |
| `app/Models/Task.php` | Model للمهام اليومية |
| `app/Models/PomodoroSession.php` | Model لجلسات Pomodoro |
| `app/Models/WeeklyReview.php` | Model للمراجعات الأسبوعية |

---

### ⚙️ Services (منطق العمل)

| الملف | الوظيفة |
|-------|---------|
| `app/Services/StatusService.php` | **محرك الحالات** - حساب Green/Yellow/Red لكل Module |
| `app/Services/InsightService.php` | **محرك التحذيرات** - 10 قواعد للتحذيرات الذكية |
| `app/Services/BurnoutService.php` | **مراقب الإرهاق** - حساب مستوى الخطر (Low/Medium/High) |
| `app/Services/LockingService.php` | **نظام القفل** - قفل النظام عند ≥2 أحمر |

#### StatusService Methods:
```php
getModuleStatus(User $user, string $module): string  // green|yellow|red
getAllStatuses(User $user): array
getRedCount(User $user): int
isGloballyLocked(User $user): bool
```

#### InsightService Methods:
```php
getActiveInsights(User $user): Collection
getTopWarnings(User $user, int $limit = 3): Collection
```

#### BurnoutService Methods:
```php
calculateRisk(User $user): string  // low|medium|high
getBurnoutData(User $user): array
```

#### LockingService Methods:
```php
isLocked(User $user): bool
getLockedModules(): array
getAllowedActions(): array
getRedStatuses(User $user): array
getLockMessage(User $user): ?string
```

---

### 🎮 Controllers

| الملف | الوظيفة |
|-------|---------|
| `app/Http/Controllers/DecisionDashboardController.php` | الـ Dashboard الرئيسي - يجمع كل البيانات |
| `app/Http/Controllers/MetricController.php` | CRUD لإدخال المقاييس يومياً |
| `app/Http/Controllers/TaskController.php` | إدارة Today One Thing + Top 3 |
| `app/Http/Controllers/PomodoroController.php` | API لتسجيل جلسات Pomodoro |
| `app/Http/Controllers/WeeklyReviewController.php` | المراجعة الأسبوعية |

---

## 📊 هيكل قاعدة البيانات

### جدول `metrics`
```sql
id, name, key (unique), module, data_type, config (json), timestamps
```

### جدول `metric_values`
```sql
id, user_id, metric_id, value, date, timestamps
UNIQUE(user_id, metric_id, date)
```

### جدول `tasks`
```sql
id, user_id, title, type (one_thing|top_3), completed, date, timestamps
```

### جدول `pomodoro_sessions`
```sql
id, user_id, task_id (nullable), duration, status (completed|interrupted), 
energy_before, energy_after, timestamps
```

### جدول `weekly_reviews`
```sql
id, user_id, kpi_snapshot (json), what_worked, what_failed, 
next_week_focus, week_start, timestamps
```

---

## 🔴🟡🟢 قواعد Status Engine

### Life & Discipline
- 🟢 Green: `gym_days >= 3 && rest_days >= 1`
- 🟡 Yellow: `gym_days >= 1`
- 🔴 Red: `gym_days == 0 for 2 weeks` أو `work_streak >= 10`

### Financial Safety
- 🟢 Green: `income >= expenses && runway >= 3`
- 🟡 Yellow: `runway >= 1`
- 🔴 Red: `income < expenses` أو `runway < 1`

### Focus System
- 🟢 Green: `completed_tasks >= 5/week`
- 🟡 Yellow: `completed_tasks >= 2/week`
- 🔴 Red: `3 days without completion`

### Pomodoro
- 🟢 Green: `pomodoros >= 6/day && interruption_rate < 30%`
- 🟡 Yellow: `pomodoros >= 3/day`
- 🔴 Red: `pomodoros < 3 for 3 days`

---

## ⚠️ الـ 10 Insight Rules

1. `income < expenses` → 🔴 "تصرف أكثر مما تربح"
2. `runway < 1` → 🔴 "Runway أقل من شهر"
3. `income_unstable` → 🟡 "دخل غير مستقر"
4. `work_streak >= 10` → 🔴 "10 أيام بدون راحة → Burnout Risk"
5. `avg_work_hours > 10` → 🟡 "ساعات عمل مرتفعة"
6. `gym_days == 0 for 2 weeks` → 🔴 "انضباط جسدي منخفض"
7. `pomodoros < 3 for 3 days` → 🔴 "تركيز منخفض جداً"
8. `interruption_rate > 40%` → 🟡 "مقاطعات كثيرة → Cognitive Fatigue"
9. `no_weekly_review for 2 weeks` → 🟡 "أسبوعين بدون مراجعة"
10. `red_count >= 2` → 🔴 "النظام مقفل - أصلح الأحمر أولاً"

---

## 🔒 نظام القفل (Locking System)

**Trigger:** عندما يكون `red_count >= 2`

**Locked:**
- مشاريع جديدة
- Business expansion
- Learning expansion

**Allowed:**
- عرض Dashboard
- إدخال المقاييس
- إكمال المهام
- Pomodoro
- المراجعة الأسبوعية
- إصلاح الأحمر

---

## 📝 ما تبقى (Views)

### المطلوب إنشاؤه:
```
resources/views/decision-os/
├── dashboard.blade.php          ← الصفحة الرئيسية
├── components/
│   ├── today-one-thing.blade.php
│   ├── pomodoro-timer.blade.php
│   ├── warnings-box.blade.php
│   ├── module-card.blade.php
│   ├── kpi-widget.blade.php
│   ├── weekly-review-cta.blade.php
│   └── burnout-indicator.blade.php
├── metrics/
│   ├── input.blade.php
│   └── history.blade.php
├── tasks/
│   └── index.blade.php
├── pomodoro/
│   └── history.blade.php
└── weekly-review/
    ├── form.blade.php
    ├── show.blade.php
    └── index.blade.php
```

### Routes المطلوب إضافتها:
```php
Route::middleware(['auth'])->prefix('decision-os')->name('decision-os.')->group(function () {
    Route::get('/', [DecisionDashboardController::class, 'index'])->name('dashboard');
    Route::get('metrics', [MetricController::class, 'index'])->name('metrics.index');
    Route::post('metrics', [MetricController::class, 'store'])->name('metrics.store');
    Route::get('tasks', [TaskController::class, 'index'])->name('tasks.index');
    Route::post('tasks', [TaskController::class, 'store'])->name('tasks.store');
    Route::patch('tasks/{task}/toggle', [TaskController::class, 'toggle'])->name('tasks.toggle');
    Route::delete('tasks/{task}', [TaskController::class, 'destroy'])->name('tasks.destroy');
    Route::get('pomodoro/stats', [PomodoroController::class, 'stats'])->name('pomodoro.stats');
    Route::post('pomodoro', [PomodoroController::class, 'store'])->name('pomodoro.store');
    Route::get('weekly-review', [WeeklyReviewController::class, 'index'])->name('weekly-review.index');
    Route::get('weekly-review/create', [WeeklyReviewController::class, 'create'])->name('weekly-review.create');
    Route::post('weekly-review', [WeeklyReviewController::class, 'store'])->name('weekly-review.store');
});
```

---

## ✅ حالة التنفيذ

| المرحلة | الحالة |
|---------|--------|
| المرحلة 0: التحضير | ✅ مكتمل |
| المرحلة 1: البيانات الأساسية | ✅ مكتمل |
| المرحلة 2: Modules الأساسية | ✅ مكتمل |
| المرحلة 3: Pomodoro System | ✅ مكتمل (Backend) |
| المرحلة 4: Status Engine | ✅ مكتمل |
| المرحلة 5: Insights Engine | ✅ مكتمل |
| المرحلة 6: Burnout Monitor | ✅ مكتمل |
| المرحلة 7: Weekly Review | ✅ مكتمل (Backend) |
| المرحلة 8: Dashboard | 🔄 جاري (Views) |
| المرحلة 9: Locking System | ✅ مكتمل |
| المرحلة 10: Demo & Finalization | ⏳ قيد الانتظار |
