<div {{ $attributes->class(['sidebar-link', 'nested-link' => $isNested, 'active' => $isActive]) }}>


    <a href="{{ $link }}">
        <div class="icon">
            @if (isset($icon))
                {{ $icon }}
            @else
                &nwarr;
            @endif
        </div>

        {{ $slot }}
    </a>
</div>
