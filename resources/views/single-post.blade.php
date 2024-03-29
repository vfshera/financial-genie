<x-app-layout>
    <x-slot name="postseo">
        {!! seo($post ?? null) !!}
    </x-slot>


    <div class="single-post-page fg-container">

        <div class="single-post-image">
            <img src="{{ $post->getFirstMediaUrl('covers') }}" alt="{{ $post->slug }}">
        </div>

        <div class="single-post-content">
            <section class="sharing">

                <p>Share</p>



                <div class="sharables">
                    <span class="bg-indigo-500">SH</span>
                    <span class="bg-pink-500">WA</span>
                    <span class="bg-red-500">FB</span>
                </div>
            </section>
            <section class="post">
                <h2 class="post-title">{{ $post->title }}</h2>
                <h6 class="post-read">{{ read_time(strip_tags($post->content)) }}</h6>
                {!! $post->content !!}
            </section>
        </div>


    </div>
</x-app-layout>
