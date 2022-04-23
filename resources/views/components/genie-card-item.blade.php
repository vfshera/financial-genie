<div class="{{ $section }} {{ $cardType }} @if ($enlarged) enlarged-card @endif">
    <div class="image"
        style="background-image: url('storage/icons/fgplaceholder.png');background-repeat: no-repeat;background-position: center;background-size:40%">
        <img src="https://picsum.photos/900/600?random={{ random_int(1, 100) }}" alt="{{ $card->title }}">

        <p class="category">{{ $card->category }}</p>
    </div>
    <div class="info">
        <p class="title">{{ $card->title }}</p>
        <div class="info-group">
            <p class="author"><span>By</span>{{ $card->author }}</p>
            <p class="posted">{{ $card->posted }}</p>
        </div>
    </div>
</div>
