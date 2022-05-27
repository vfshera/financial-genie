<x-app-layout>

    <div class="single-post-page fg-container">

        <div class="single-post-image">

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
                {!! $post->content !!}
            </section>
        </div>


    </div>
</x-app-layout>
