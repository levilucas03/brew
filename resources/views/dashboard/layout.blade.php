<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('dashboard.core.head')
</head>

<body>
    @include('dashboard.core.sidebar')
    @yield('content')
    @include('dashboard.core.footer')
    @yield('scripts')
</body>
</html>
