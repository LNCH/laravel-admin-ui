@extends(config('laravel-admin-ui.views-namespace', 'laravel-admin-ui').'::layouts.base')

@section('body')
    <div class="la_page-wrapper">
        <header class="la_main-header">
            Main Header
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