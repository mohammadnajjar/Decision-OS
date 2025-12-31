
# Decision OS Dashboard - AI Coding Instructions

## Project Identity & Philosophy
Decision OS Dashboard هو نظام رقمي لمتابعة الأداء الشخصي والمهني عبر 5 وحدات أساسية (الانضباط، الأمان المالي، التركيز، بومودورو، المراجعة الأسبوعية) مع محرك حالة (Status Engine) وقواعد إنذار ذكية (Insights). كل وحدة لها KPIs وقواعد ألوان (أخضر/أصفر/أحمر) وتفعيل قفل تلقائي عند الخطر.

---

## Domain Modules
- **الانضباط والحياة**: Gym Days, Work Hours, Rest Days
- **الأمان المالي**: الدخل، المصروفات، المدخرات، Runway
- **نظام التركيز**: Today One Thing, Top 3, عدد المهام المكتملة
- **Pomodoro System**: عدد Pomodoros، معدل المقاطعة
- **المراجعة الأسبوعية**: KPIs Snapshot, What Worked, What Failed, Next Week Focus

---

## Status Engine & Insights
- **Status Logic**: لكل وحدة قواعد ألوان (انظر خطة التنفيذ)
- **Global Lock**: إذا كان هناك وحدتان أو أكثر باللون الأحمر → النظام مقفل
- **Insight Rules**: 10 قواعد تحذير (انظر خطة التنفيذ)

---

## Database Schema
- users
- metrics
- metric_values
- tasks
- pomodoro_sessions
- insights
- weekly_reviews

---

## Service Layer Conventions
- StatusService: حساب حالة كل وحدة
- InsightService: استخراج التحذيرات
- BurnoutService: حساب خطر الإرهاق
- LockingService: منطق القفل
- القاعدة الذهبية: كل منطق في Laravel، الجافاسكريبت فقط للتايمر

---

## MVP Phases & Task Breakdown
انظر docs/plan-decisionOsImplementation.prompt.md لجدول التنفيذ المرحلي (10 مراحل)

---

## Template Foundation (Fabkin)
# Fabkin Admin Dashboard - AI Coding Instructions

## Project Overview
Fabkin is a **Laravel 12 admin dashboard template** with pre-built UI components. It's a static template system where Blade views render directly via a catch-all route—no backend CRUD logic exists yet.

## Architecture

### Routing Pattern
All routes resolve through a single catch-all controller in [routes/web.php](routes/web.php):
```php
Route::get('{any}', [DashboardController::class, 'index'])->where('any', '.*');
```
The controller ([app/Http/Controllers/DashboardController.php](app/Http/Controllers/DashboardController.php)) maps URL paths directly to Blade view names—e.g., `/dashboard-crm` → `dashboard-crm.blade.php`.

### Blade Layout System
- **Master layouts**: [resources/views/partials/Layouts/](resources/views/partials/Layouts/)
  - `master.blade.php` — Full dashboard with sidebar, header, footer
  - `master_auth.blade.php` — Auth pages (no sidebar/header)
- **Partials**: [resources/views/partials/](resources/views/partials/) — `sidebar.blade.php`, `header.blade.php`, `footer.blade.php`, etc.
- **Section pattern** — All views must define:
  ```blade
  @extends('partials.layouts.master')
  @section('title', 'Page Title | FabKin Admin')
  @section('title-sub', 'Category')
  @section('pagetitle', 'Display Name')
  @section('content') ... @endsection
  @section('css') <!-- Page-specific CSS --> @endsection
  @section('js') <!-- Page-specific JS --> @endsection
  ```

### Asset Pipeline
- **Source**: `resources/assets/scss/` → **Compiled to**: `public/assets/css/`
- **Build**: Uses Laravel Mix ([webpack.mix.js](webpack.mix.js)), NOT Vite
- **Key files**:
  - `app.scss` — Main styles importing Bootstrap + custom components
  - `bootstrap.scss`, `icons.scss` — Separate bundles
- **RTL Support**: Auto-generates `-rtl.min.css` variants

## Development Commands
```bash
# Start dev server + queue + logs + asset watching
composer dev

# Build assets (development)
npm run dev

# Build assets (production, minified)
npm run prod

# Run tests
composer test
# or: php artisan test
```

## View Naming Convention
Views follow a strict naming pattern: `{category}-{feature}.blade.php`
- `dashboard-*.blade.php` — Dashboard variants (analytics, crm, ecommerce, etc.)
- `apps-*.blade.php` — Application modules (calendar, chat, email, invoice, etc.)
- `ui-*.blade.php` — UI component demos (forms, tables, modals, etc.)
- `auth-*.blade.php` — Authentication pages (use `master_auth` layout)
- `pages-*.blade.php` — Standalone pages (profile, pricing, blog, etc.)

## Frontend Libraries (in `public/assets/libs/`)
Pre-bundled libraries—use via script tags in `@section('js')`:
- **Charts**: ApexCharts, Chart.js, ECharts
- **Tables**: GridJS, List.js, DataTables (via CDN)
- **Forms**: Choices.js, Cleave.js, Dropzone, Quill editor
- **UI**: SweetAlert2, Swiper, Shepherd.js (tours), Sortable.js
- **Maps**: Leaflet, GMaps, jsVectorMap

Example pattern for page-specific JS:
```blade
@section('js')
<script src="assets/libs/apexcharts/apexcharts.min.js"></script>
<script type="module" src="assets/js/app.js"></script>
<script type="module" src="assets/js/chart/your-chart.init.js"></script>
@endsection
```

## CSS Classes & Conventions
- **Bootstrap 5.3** base with custom utility classes
- **Icon prefixes**: `ri-*` (Remixicon), `bi-*` (Bootstrap Icons)
- **Sidebar classes**: `pe-app-sidebar`, `pe-nav-link`, `pe-slide-menu`
- **Card pattern**: Always use `.card > .card-header + .card-body`
- **Color variants**: `-primary`, `-success`, `-warning`, `-danger`, `-info`, `-secondary`
- **Subtle backgrounds**: `bg-{color}-subtle text-{color}` for badges/chips

## Adding New Pages
1. Create `resources/views/{category}-{name}.blade.php`
2. Extend appropriate master layout
3. Add sidebar link in [resources/views/partials/sidebar.blade.php](resources/views/partials/sidebar.blade.php)
4. Access via URL: `/{category}-{name}`

## Key Directories
```
resources/views/          # Blade templates (120+ pages)
resources/assets/scss/    # SCSS source (compiled via Mix)
public/assets/           # Compiled CSS, JS, images, libs
app/Http/Controllers/    # Currently only DashboardController
```

## Notes
- Static assets use relative paths (`assets/...`) — works because of `public/` webroot
- No API routes defined yet — extend in `routes/api.php` when needed
- Default database is SQLite (created on `composer create-project`)

- أي تعديل تقوم به أنشئ ملف توثيق باسم التعديل .md مع شرح التغيير وسببه بالعربية.

## Project Overview
Fabkin is a **Laravel 12 admin dashboard template** with pre-built UI components. It's a static template system where Blade views render directly via a catch-all route—no backend CRUD logic exists yet.

## Architecture

### Routing Pattern
All routes resolve through a single catch-all controller in [routes/web.php](routes/web.php):
```php
Route::get('{any}', [DashboardController::class, 'index'])->where('any', '.*');
```
The controller ([app/Http/Controllers/DashboardController.php](app/Http/Controllers/DashboardController.php)) maps URL paths directly to Blade view names—e.g., `/dashboard-crm` → `dashboard-crm.blade.php`.

### Blade Layout System
- **Master layouts**: [resources/views/partials/Layouts/](resources/views/partials/Layouts/)
  - `master.blade.php` — Full dashboard with sidebar, header, footer
  - `master_auth.blade.php` — Auth pages (no sidebar/header)
- **Partials**: [resources/views/partials/](resources/views/partials/) — `sidebar.blade.php`, `header.blade.php`, `footer.blade.php`, etc.
- **Section pattern** — All views must define:
  ```blade
  @extends('partials.layouts.master')
  @section('title', 'Page Title | FabKin Admin')
  @section('title-sub', 'Category')
  @section('pagetitle', 'Display Name')
  @section('content') ... @endsection
  @section('css') <!-- Page-specific CSS --> @endsection
  @section('js') <!-- Page-specific JS --> @endsection
  ```

### Asset Pipeline
- **Source**: `resources/assets/scss/` → **Compiled to**: `public/assets/css/`
- **Build**: Uses Laravel Mix ([webpack.mix.js](webpack.mix.js)), NOT Vite
- **Key files**:
  - `app.scss` — Main styles importing Bootstrap + custom components
  - `bootstrap.scss`, `icons.scss` — Separate bundles
- **RTL Support**: Auto-generates `-rtl.min.css` variants

## Development Commands
```bash
# Start dev server + queue + logs + asset watching
composer dev

# Build assets (development)
npm run dev

# Build assets (production, minified)
npm run prod

# Run tests
composer test
# or: php artisan test
```

## View Naming Convention
Views follow a strict naming pattern: `{category}-{feature}.blade.php`
- `dashboard-*.blade.php` — Dashboard variants (analytics, crm, ecommerce, etc.)
- `apps-*.blade.php` — Application modules (calendar, chat, email, invoice, etc.)
- `ui-*.blade.php` — UI component demos (forms, tables, modals, etc.)
- `auth-*.blade.php` — Authentication pages (use `master_auth` layout)
- `pages-*.blade.php` — Standalone pages (profile, pricing, blog, etc.)

## Frontend Libraries (in `public/assets/libs/`)
Pre-bundled libraries—use via script tags in `@section('js')`:
- **Charts**: ApexCharts, Chart.js, ECharts
- **Tables**: GridJS, List.js, DataTables (via CDN)
- **Forms**: Choices.js, Cleave.js, Dropzone, Quill editor
- **UI**: SweetAlert2, Swiper, Shepherd.js (tours), Sortable.js
- **Maps**: Leaflet, GMaps, jsVectorMap

Example pattern for page-specific JS:
```blade
@section('js')
<script src="assets/libs/apexcharts/apexcharts.min.js"></script>
<script type="module" src="assets/js/app.js"></script>
<script type="module" src="assets/js/chart/your-chart.init.js"></script>
@endsection
```

## CSS Classes & Conventions
- **Bootstrap 5.3** base with custom utility classes
- **Icon prefixes**: `ri-*` (Remixicon), `bi-*` (Bootstrap Icons)
- **Sidebar classes**: `pe-app-sidebar`, `pe-nav-link`, `pe-slide-menu`
- **Card pattern**: Always use `.card > .card-header + .card-body`
- **Color variants**: `-primary`, `-success`, `-warning`, `-danger`, `-info`, `-secondary`
- **Subtle backgrounds**: `bg-{color}-subtle text-{color}` for badges/chips

## Adding New Pages
1. Create `resources/views/{category}-{name}.blade.php`
2. Extend appropriate master layout
3. Add sidebar link in [resources/views/partials/sidebar.blade.php](resources/views/partials/sidebar.blade.php)
4. Access via URL: `/{category}-{name}`

## Key Directories
```
resources/views/          # Blade templates (120+ pages)
resources/assets/scss/    # SCSS source (compiled via Mix)
public/assets/           # Compiled CSS, JS, images, libs
app/Http/Controllers/    # Currently only DashboardController
```

## Notes
- Static assets use relative paths (`assets/...`) — works because of `public/` webroot
- No API routes defined yet — extend in `routes/api.php` when needed
- Default database is SQLite (created on `composer create-project`)

- any edit you will make create docsfilewiththeanme for the edit .md  file with description of the changes you made and the reason for the changes in arabic.

