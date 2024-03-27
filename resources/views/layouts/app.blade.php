<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title', 'Laravel App')</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="@yield('body-class')">

    @php
        $hideNavbar = Route::is('register', 'login');
    @endphp

    @unless ($hideNavbar)
        @include('layouts.partials.navbar')
    @endunless

    <main id="app">
        @yield('content')
    </main>

    @stack('scripts')
</body>

</html>
