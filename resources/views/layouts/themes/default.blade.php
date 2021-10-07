@extends(config('laravel-admin-ui.views-namespace', 'laravel-admin-ui').'::layouts.base')

@section('body')
    <div class="lai_page-wrapper">
        <header class="lai_main-header">
            Main Header
        </header>
        <section class="lai_main-sidebar">
            Main Nav
        </section>
        <main class="lai_main-content">
            <header class="lai_content-header">
                Content header
            </header>
            @yield('main_content')
            <footer class="lai_content-footer">
                Copyright LNCH
            </footer>
        </main>
    </div>
@endsection