@extends(config('laravel-admin-ui.views-namespace', 'laravel-admin-ui').'::layouts.base')

@section('body')
    <div class="la_page-wrapper">
        <header class="la_main-header">
            {{-- Mobile Nav Toggle --}}
            <div class="mobile-nav-toggle">
                <button id="la_mobile-nav-toggle-button" class="header-button">
                    <span class="sr-only">Toggle Mobile Nav</span>
                    <span class="menu-bars-icon"></span>
                </button>
            </div>

            {{-- Header Logo --}}
            <div class="header-logo">
                @include(config('laravel-admin-ui.views-namespace', 'laravel-admin-ui').'::partials.header-brand-panel')
            </div>

            {{-- Search Bar --}}
            @include(config('laravel-admin-ui.views-namespace', 'laravel-admin-ui').'::partials.search-form')

            <div class="center-divider"></div>

            {{-- Notifications --}}
            @include(config('laravel-admin-ui.views-namespace', 'laravel-admin-ui').'::partials.header-notifications')

            {{-- Account Dropdown --}}
            @include(config('laravel-admin-ui.views-namespace', 'laravel-admin-ui').'::partials.account-menu')
        </header>

        <section class="la_main-sidebar">
            @include(config('laravel-admin-ui.views-namespace', 'laravel-admin-ui').'::partials.main-navigation')
        </section>

        <main class="la_main-content">
{{--            <header class="la_content-header">--}}
{{--                Content header--}}
{{--            </header>--}}
            @yield('main_content')
{{--            <footer class="la_content-footer">--}}
{{--                Copyright LNCH--}}
{{--            </footer>--}}
        </main>
    </div>
@endsection