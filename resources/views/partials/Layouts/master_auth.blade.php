<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<title>@yield('title', ' | FabKin Admin & Dashboards Template')</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta content="Admin & Dashboards Template" name="description" />
<meta content="Pixeleyez" name="author" />

<!-- layout setup -->
<script type="module" src="{{ asset('assets/js/layout-setup.js') }}"></script>

<!-- App favicon -->
<link rel="shortcut icon" href="{{ asset('assets/images/k_favicon_32x.png') }}">

@yield('css')
@include('partials.head-css')
</head>
<body>

@yield('content')

@include('partials.vendor-scripts')

@yield('js')

</body>

</html>
