<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        @isset($attributes['page-title'])
            <title>{{ $attributes['page-title'] }}</title>
        @else
            <title>{{ config('app.name', 'NuBrite') }}</title>
        @endif

        <!-- Fonts -->
        @stack('fonts')

        <!-- Styles -->
        @stack('styles')
    </head>

    <body class="{{ implode(' ', array_merge($bodyClasses ?? [], ['font-sans', 'antialiased'])) }}">
        @yield('body')
    </body>

    <!-- Scripts -->
    @stack('scripts')
</html>
