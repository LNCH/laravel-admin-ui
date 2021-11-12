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
                Laravel Admin
            </div>

            {{-- Search Bar --}}
            <div class="search-bar">
                <x-laravel-admin-ui-search-form />
            </div>

            <div class="center-divider"></div>

            {{-- Notifications --}}
            <div class="header-notifications">
                <button class="header-button">HN</button>
            </div>

            {{-- Account Dropdown --}}
            <div class="account-dropdown">
                <button class="header-button">
                    <span class="sr-only">Account Menu</span>
                    <span class="user-icon"></span>
                    <span class="user-name">Tom Lynch</span>
                </button>
            </div>
        </header>

        <section class="la_main-sidebar">
            <nav class="main-navigation">
                <ul>
                    <li>
                        <a href="#">
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span>Users</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span>Products</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span>Orders</span>
                            <span class="counter">38</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span>Settings</span>
                        </a>
                    </li>
                </ul>
            </nav>
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