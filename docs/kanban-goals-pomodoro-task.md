# تحديثات Kanban و Goals وربط Pomodoro بالمهام

## التاريخ: 2025

---

## 1. ربط المهام بالمشاريع (Task → Project)

### التغييرات:
- إضافة حقول جديدة لجدول `tasks`:
  - `project_id` (foreign key)
  - `status` (backlog / todo / in_progress / done) للـ Kanban
  - `priority` (low / medium / high)
  - `description` (نص اختياري)

### الملفات المعدلة:
- `database/migrations/2026_01_01_005333_add_project_id_and_status_to_tasks_table.php`
- `app/Models/Task.php` - إضافة علاقة `project()`
- `app/Models/Project.php` - إضافة علاقة `tasks()`

---

## 2. Kanban Board للمشاريع

### الهدف:
عرض مهام كل مشروع في لوحة Kanban مع إمكانية السحب والإفلات.

### الأعمدة:
1. **Backlog** - المهام المستقبلية
2. **To Do** - المهام الجاهزة للتنفيذ
3. **In Progress** - المهام قيد التنفيذ
4. **Done** - المهام المكتملة

### الملفات الجديدة:
- `resources/views/decision-os/projects/kanban.blade.php`

### الملفات المعدلة:
- `app/Http/Controllers/ProjectController.php`:
  - `kanban(Project $project)` - عرض الـ Kanban
  - `updateTaskStatus()` - تحديث الحالة بـ AJAX
  - `addTask()` - إضافة مهمة جديدة للمشروع
- `routes/web.php` - إضافة مسارات Kanban

### المسارات الجديدة:
```php
Route::get('/projects/{project}/kanban', [ProjectController::class, 'kanban'])->name('projects.kanban');
Route::post('/projects/{project}/tasks', [ProjectController::class, 'addTask'])->name('projects.add-task');
Route::patch('/projects/{project}/tasks/{task}/status', [ProjectController::class, 'updateTaskStatus'])->name('projects.update-task-status');
```

---

## 3. أهداف السنة (Yearly Goals)

### الهدف:
تتبع الأهداف السنوية مع الفئات والتقدم.

### الفئات:
- شخصي (personal)
- مالي (financial)
- صحي (health)
- مهني (career)
- تعليمي (learning)
- علاقات (relationships)
- أخرى (other)

### الحالات:
- not_started
- in_progress
- completed
- abandoned

### الملفات الجديدة:
- `app/Models/YearlyGoal.php`
- `app/Http/Controllers/YearlyGoalController.php`
- `resources/views/decision-os/goals/index.blade.php`
- `resources/views/decision-os/goals/create.blade.php`
- `resources/views/decision-os/goals/edit.blade.php`
- `database/migrations/2026_01_01_005248_create_yearly_goals_table.php`

### المسارات الجديدة:
```php
Route::get('/goals', ...)->name('goals.index');
Route::get('/goals/create', ...)->name('goals.create');
Route::post('/goals', ...)->name('goals.store');
Route::get('/goals/{goal}/edit', ...)->name('goals.edit');
Route::put('/goals/{goal}', ...)->name('goals.update');
Route::patch('/goals/{goal}/progress', ...)->name('goals.update-progress');
Route::delete('/goals/{goal}', ...)->name('goals.destroy');
```

### تعديل Sidebar:
- إضافة رابط "أهداف السنة" في قسم المراجعة

---

## 4. ربط Pomodoro بالمهام (اختياري)

### الهدف:
السماح للمستخدم باختيار أي مهمة (وليس فقط مهمة اليوم) عند بدء جلسة Pomodoro.

### التغييرات:
- `app/Http/Controllers/PomodoroController.php`:
  - إضافة `$allTasks` للمهام غير المكتملة
- `resources/views/decision-os/pomodoro/index.blade.php`:
  - إضافة dropdown لاختيار المهمة
  - تحديث JS لمزامنة الاختيار

### الاستخدام:
1. اذهب لصفحة Pomodoro
2. اختر المهمة من القائمة المنسدلة (اختياري)
3. ابدأ الجلسة
4. الجلسة ستُربط بالمهمة المختارة

---

## ملخص v1.md

### الميزات المنفذة ✅:
1. ✅ Onboarding + Profiles
2. ✅ Metrics System
3. ✅ Life & Discipline
4. ✅ Financial Safety + Daily Expense Tracking
5. ✅ Focus System (Today One Thing + Top 3)
6. ✅ Pomodoro Timer
7. ✅ Burnout Monitor (partial)
8. ✅ Decision Log
9. ✅ Time → Money (Projects)
10. ✅ Client Health
11. ✅ Weekly Review
12. ✅ Dashboard
13. ✅ Task → Project linking + Kanban
14. ✅ Pomodoro → Task linking
15. ✅ Yearly Goals

---

## ملاحظات للمطور:
- الـ Kanban يستخدم HTML5 Drag & Drop API
- AJAX للتحديث الفوري بدون إعادة تحميل
- الـ Goals تدعم تحديث التقدم عبر slider
