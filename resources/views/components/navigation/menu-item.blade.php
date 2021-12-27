<li class="{{ $wrapperClasses }}" {{ $attributes }} role="none">
    <a
        href="{{ $route }}"
        @if ($target) target="{{ $target }}" @endif
        role="menuitem"
        aria-describedby="linkText-{{ $id }}"
    >
        @isset ($icon)
            <div class="icon">
                {!! $icon !!}
            </div>
        @endif

        <span id="linkText-{{ $id }}">{{ $linkText ?? 'no link text...' }}</span>

        @if ($counter)
            <span class="counter">{{ $counter }}</span>
        @endif
    </a>
</li>