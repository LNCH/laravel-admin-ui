@extends(config('laravel-admin-ui.views-namespace', 'laravel-admin-ui').'::layouts.themes.'.config('laravel-admin-ui.theme', 'default'))

@section('main_content')
    @yield('content')
@endsection