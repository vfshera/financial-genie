<div class="{{ $section . '-wrapper' }} {{ $types[$cardType] . 's-wrapper' }} section-allowance fg-container"
    id="{{ $section }}">
    <header class="section-head">
        <p>{{ $title }}</p>
        <a href="#{{ $section }}">View All</a>
    </header>
    <section class=" {{ $section . '-cards' }} {{ $types[$cardType] . 's' }} ">
        @foreach ($feeds as $key => $feed)
            @php
                $isEnlarged = $key < 2 && $cardType == 'TOP_HALF_BIG';
            @endphp

            @if ($key < $limit)
                <x-genie-card-item :card="$feed" :enlarged="$isEnlarged" :section="$section" :type="$cardType" />
            @endif
        @endforeach
    </section>
</div>
