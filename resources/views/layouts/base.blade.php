<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        @hasSection('page-title')
            <title>@yield('page-title')</title>
        @else
            <title>{{ config('app.name', 'Laravel Admin UI') }}</title>
        @endif

        <!-- Fonts -->
        @stack('head_fonts')

        <!-- Web Fonts -->
        @if (count(config('laravel-admin-ui.google_fonts', [])) > 1)
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            @foreach (config('laravel-admin-ui.google_fonts', []) as $font)
                <link href="{{ $font }}" rel="stylesheet">
            @endforeach
        @endif

        <!-- Styles -->
        @stack('head_styles')
    </head>

    <body class="{{ implode(' ', array_merge($bodyClasses ?? [], ['font-sans', 'antialiased'])) }}">
        @yield('body')

        <!-- Scripts -->
        @stack('body_scripts')
    </body>
</html>
