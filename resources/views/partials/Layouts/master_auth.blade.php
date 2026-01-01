<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" dir="{{ app()->getLocale() === 'ar' ? 'rtl' : 'ltr' }}">
<head>
<meta charset="utf-8" />
<base href="{{ url('/') }}/">
<title>@yield('title', 'Decision OS Dashboard')</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta content="Decision OS - نظام القرار والتنفيذ" name="description" />
<meta content="Decision OS" name="author" />

<!-- layout setup -->
<script type="module" src="{{ asset('assets/js/layout-setup.js') }}"></script>

<!-- Sync dir from Backend to Theme Customizer localStorage -->
<script>
    // مزامنة dir من Backend إلى localStorage للـ Theme Customizer فقط
    (function() {
        const currentDir = document.documentElement.dir;
        if (currentDir) {
            localStorage.setItem('dir', currentDir);
        }
    })();
</script>

<!-- App favicon -->
<link rel="shortcut icon" href="{{ asset('assets/images/k_favicon_32x.png') }}">

@yield('css')
@include('partials.head-css')
</head>
<body>

@yield('content')

@include('partials.vendor-scripts')

{{-- Language Switcher Script --}}
<script src="{{ asset('assets/js/language-switcher.js') }}"></script>

@yield('js')

</body>

</html>
