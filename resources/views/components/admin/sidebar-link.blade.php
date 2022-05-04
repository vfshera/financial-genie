<div {{ $attributes->class(['sidebar-link', 'active' => $isActive]) }}>
    <a href="#">
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
