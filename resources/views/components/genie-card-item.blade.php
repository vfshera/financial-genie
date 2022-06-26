<div @class([
    $section,
    $cardType,
    'enlarged-card' => $enlarged,
    'first-feed' => $bigFirst,
])>

    <div class="image"
        style="background-image: url('storage/icons/fgplaceholder.png');background-repeat: no-repeat;background-position: center;background-size:40%">
        <img src="https://picsum.photos/900/600?random={{ random_int(1, 100) }}" alt="{{ $post->title }}">

        <p class="category">{{ $post->category }}</p>
    </div>

    <div class="info">
        <p class="title"><a
                href="{{ route('single-post', ['post' => $post, 'slug' => $post->slug]) }}">{{ $post->title }}</a>
        </p>
        <div class="info-group">
            <p class="author"><span>By</span>{{ $post->user->name ?? 'unknown author' }}</p>
            <p class="posted">{{ $post->published ? $post->published_at : 'draft' }}</p>
        </div>
    </div>
</div>
