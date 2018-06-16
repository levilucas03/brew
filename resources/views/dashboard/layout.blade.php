<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('dashboard.core.head')
</head>

<body>
    <div class="container">
        <div class="grid-x grid-padding-x">
            <div class="cell medium-4">
                @include('dashboard.core.sidebar')
            </div>
            <div class="cell medium-8">
                @yield('content')
            </div>
        </div>
        <footer>
            <div class="grid-x grid-padding-x">
                @include('dashboard.core.footer')
            </div>
        </footer>
    </div>
    <script src="/js/app.js"></script>
    @yield('scripts')
</body>
</html>
