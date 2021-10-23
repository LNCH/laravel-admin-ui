@extends(config('laravel-admin-ui.views-namespace', 'laravel-admin-ui').'::layouts.base')

@section('body')
    <div class="la_page-wrapper">
        <header class="la_main-header">
            {{-- Mobile Nav Toggle --}}
            <div class="mobile-nav-toggle">
                <button>
                    <span class="sr-only">Toggle Mobile Nav</span>
                </button>
            </div>
            {{-- Header Logo --}}
            <div class="header-logo">
                Laravel Admin
            </div>
            {{-- Search Bar --}}
            <div class="search-bar">
                <x-laravel-admin-ui-search-form />
            </div>
            {{-- Notifications --}}
            <div class="header-notifications">
                HN
            </div>
            {{-- Account Dropdown --}}
            <div class="account-dropdown">
                AD
            </div>
        </header>
        <section class="la_main-sidebar">
            Main Nav
        </section>
        <main class="la_main-content">
            <header class="la_content-header">
                Content header
            </header>
            @yield('main_content')
            <footer class="la_content-footer">
                Copyright LNCH
            </footer>
        </main>
    </div>
@endsection