<x-app-layout>

    <div class="welcome-page">

        <section class="news fg-container" id="news">

            @foreach ($newsFeed as $key => $feed)
                <div class="feed @if ($key == 0) first-feed @endif">
                    <div class="image">
                        <img src="https://picsum.photos/900/600?random={{ $key + 1 }}" alt="">

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
            @endforeach

        </section>
    </div>



</x-app-layout>
