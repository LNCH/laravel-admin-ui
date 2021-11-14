<li class="{{ $wrapperClasses }}" {{ $attributes }}>
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
</li>