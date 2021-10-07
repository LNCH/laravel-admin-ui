@extends(config('laravel-admin-ui.views-namespace', 'laravel-admin-ui').'::layouts.themes.default')

@section('main_content')
    <h3>Package Layout</h3>
    @yield('content')
@endsection