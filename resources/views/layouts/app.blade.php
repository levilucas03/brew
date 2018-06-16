<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('core.head')
</head>

<body>
    <div id="app">

        @include('core.nav')
        <main class="py-4">
            @yield('content')
        </main>
    </div>
    @include('core.footer')
    @yield('scripts')
</body>
</html>
