<form action="{{ $action }}" class="site-search" method="{{ $method }}">
    @csrf()

    @if (!in_array($method, ['GET', 'POST']))
        @method($method)
    @endif

    <input
        type="search"
        name="search"
        id="site_search"
        @if ($placeholder) placeholder="{{ $placeholder }}" @endif
    />
</form>