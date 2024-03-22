<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script src="https://cdn.tailwindcss.com"></script>

    <title>@yield('title', 'Laravel App')</title>
</head>

<body>
    <main id="app">
        @yield('content')
    </main>

    @stack('scripts')
</body>

</html>
