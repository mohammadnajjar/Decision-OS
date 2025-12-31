# تنظيف الـ Sidebar

## التاريخ
**تاريخ التعديل:** الآن

## الملف المُعدّل
`resources/views/partials/sidebar.blade.php`

## الوصف
تم تنظيف ملف الـ sidebar من جميع العناصر غير المستخدمة وإبقاء فقط الأقسام المتعلقة بـ Decision OS.

## التغييرات

### ما تم حذفه:
- ❌ قسم Dashboards (CRM, E-Commerce, Analytics, إلخ)
- ❌ قسم Applications:
  - Calendar
  - Chat
  - Email
  - E-Commerce (Products, Orders, Cart, إلخ)
  - Academy (Courses, Students, إلخ)
  - CMS (Blog, Content, Menus)
  - Logistics
  - CRM (Leads, Deals, Contacts)
  - Projects
  - Invoice
- ❌ جميع الأقسام الأخرى غير المستخدمة

### ما تم الاحتفاظ به:
- ✅ **DECISION OS** - العنوان الرئيسي
- ✅ **لوحة التحكم** - الصفحة الرئيسية
- ✅ **العمليات اليومية:**
  - إدخال البيانات (Metrics)
  - المهام اليومية (Tasks)
  - بومودورو (Pomodoro)
- ✅ **السجلات:**
  - سجل القرارات (Decisions)
  - المشاريع (Projects)
  - العملاء (Clients)
- ✅ **المراجعة:**
  - المراجعة الأسبوعية
- ✅ **الحساب:**
  - الملف الشخصي
  - تسجيل الخروج

## السبب
كان ملف الـ sidebar يحتوي على 962 سطر من العناصر غير المستخدمة من قالب Fabkin الأصلي. تم تنظيفه ليصبح حوالي 130 سطر فقط تتضمن العناصر الخاصة بـ Decision OS.

## النسخة الاحتياطية
تم حفظ نسخة احتياطية من الملف القديم في:
`resources/views/partials/sidebar-backup.blade.php`

## ملاحظات
- الملف الجديد يستخدم نفس الـ CSS classes الخاصة بقالب Fabkin
- تم إضافة active states للروابط باستخدام `request()->routeIs()`
- تم تنظيم الأقسام بشكل منطقي حسب الوظيفة
