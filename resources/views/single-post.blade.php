<x-app-layout>

    <div class="single-post-page fg-container">

        <div class="single-post ">
            <h2 class="post-title">{{ $post->title }}</h2>
            {!! $post->content !!}
        </div>
    </div>
</x-app-layout>
