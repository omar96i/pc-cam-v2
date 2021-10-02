<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>@yield('title')</title>
    @include('layouts.header')
</head>
<body>
    @include('layouts.nav')
    <div id="app">
        <main>
            @yield('content')
        </main>
    </div>
    @include('layouts.footer')
</body>
</html>
