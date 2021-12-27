<li class="has-sub-menu {{ $wrapperClasses }}" {{ $attributes }}>

    <a href="{{ $route }}" @if ($target) target="{{ $target }}" @endif>
        @isset ($icon)
            <div class="icon">
                {!! $icon !!}
            </div>
        @endif

        <span>{{ $linkText ?? 'no link text...' }}</span>

        @if ($counter)
            <span class="counter">{{ $counter }}</span>
        @endif
    </a>

    <button class="toggle-child-menu" aria-controls="sub-menu-1" aria-expanded="false">
        <span class="expand-menu">+</span>
        <span class="close-menu">&ndash;</span>
    </button>

    <ul id="sub-menu-1" role="region" tabindex="-1">
        {{ $slot }}
    </ul>

</li>