<div class="{{ $section . '-wrapper' }} {{ $cardType . 's-wrapper' }} section-allowance fg-container"
    id="{{ $section }}">
    <header class="section-head">
        <p>{{ $title }}</p>
        <a href="#{{ $section }}">View All</a>
    </header>
    <section class=" {{ $section . '-cards' }} {{ $cardType . 's' }} ">
        @foreach ($feeds as $key => $feed)
            @if ($key < $limit)
                <div
                    class="{{ $section }} {{ $cardType }} @if ($key < 2) enlarged-card @endif">
                    <div class="image"
                        style="background-image: url('storage/icons/fgplaceholder.png');background-repeat: no-repeat">
                        <img src="https://picsum.photos/900/600?random={{ $key + random_int(1, 100) }}"
                            alt="{{ $feed->title }}">

                        <p class="category">{{ $feed->category }}</p>
                    </div>
                    <div class="info">
                        <p class="title">{{ $feed->title }}</p>
                        <div class="info-group">
                            <p class="author"><span>By</span>{{ $feed->author }}</p>
                            <p class="posted">{{ $feed->posted }}</p>
                        </div>
                    </div>
                </div>
            @endif
        @endforeach
    </section>
</div>
