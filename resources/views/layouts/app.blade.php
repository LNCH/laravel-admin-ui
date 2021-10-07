@extends(config('laravel-admin-ui.views-namespace', 'laravel-admin-ui').'::layouts.base')

@section('body')
    <h1>Main Content</h1>
    @yield('content')
@endsection