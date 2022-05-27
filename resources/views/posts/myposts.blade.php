<x-admin-layout>
    <div class="my-posts-page">


        <h1>My Posts</h1>


        <section class="my-posts">


            @foreach ($posts as $post)
                <a href="{{ route('admin.posts.edit', [$post]) }}">
                    <div class="post">
                        <div class="post-image">

                        </div>
                        <p class="post-title">
                            {{ $post->title }}
                        </p>
                    </div>
                </a>
            @endforeach
        </section>


    </div>
</x-admin-layout>
