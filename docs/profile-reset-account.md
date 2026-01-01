# إعادة تعيين الحساب (Account Reset)

## التاريخ
2026-01-01

## الوصف
تمت إضافة ميزة "إعادة تعيين الحساب" في صفحة الملف الشخصي. تتيح هذه الميزة للمستخدم حذف جميع بياناته مع الإبقاء على حسابه فعالاً.

## سبب التغيير
لمنح المستخدم القدرة على البدء من جديد دون الحاجة لإنشاء حساب جديد. مفيدة عند:
- الرغبة في بداية جديدة
- تجربة النظام من البداية
- تنظيف البيانات التجريبية

## الملفات المعدلة

### 1. routes/web.php
```php
Route::post('/profile/reset', [ProfileController::class, 'resetAccount'])->name('profile.reset');
```

### 2. app/Http/Controllers/ProfileController.php
- إضافة `use Illuminate\Support\Facades\DB;`
- إضافة method جديدة `resetAccount()` تقوم بـ:
  - التحقق من كلمة المرور
  - حذف جميع البيانات المرتبطة بالمستخدم داخل Transaction
  - إعادة تعيين بيانات المستخدم (onboarding, profile_type, الأرصدة)
  - توجيه المستخدم لصفحة الـ Onboarding

### 3. app/Models/User.php
إضافة العلاقات الناقصة:
- `expenses()`
- `incomes()`
- `expenseCategories()`
- `clients()`
- `decisions()`
- `projects()`
- `yearlyGoals()`
- `quranProgress()`
- `careerData()`
- `businessAssets()`

### 4. resources/views/profile/edit.blade.php
- إضافة كارت "إعادة تعيين الحساب" بلون تحذيري (warning)
- إضافة Modal للتأكيد مع قائمة بالبيانات التي ستُحذف
- طلب كلمة المرور للتأكيد

## البيانات التي يتم حذفها
1. المهام (Tasks)
2. المشاريع ومرفقاتها (Projects + Attachments)
3. جلسات البومودورو (Pomodoro Sessions)
4. المصروفات (Expenses)
5. الدخل (Incomes)
6. فئات المصروفات (Expense Categories)
7. الحسابات (Accounts)
8. الديون ودفعاتها (Debts + Payments)
9. العملاء (Clients)
10. القرارات (Decisions)
11. قيم المقاييس (Metric Values)
12. المراجعات الأسبوعية (Weekly Reviews)
13. الأهداف السنوية (Yearly Goals)
14. تقدم القرآن (Quran Progress)
15. البيانات المهنية (Career Data)
16. الأصول التجارية (Business Assets)

## ملاحظات أمنية
- يتطلب إدخال كلمة المرور الحالية للتأكيد
- العملية داخل Database Transaction لضمان الاتساق
- لا يمكن التراجع عن هذا الإجراء
