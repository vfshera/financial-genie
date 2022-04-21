<x-app-layout>
    <div class="welcome-page">

        <section class="news fg-container" id="news">

            @foreach ($newsFeed as $key => $feed)
                @if ($key < 7)
                    <div class="feed @if ($key == 0) first-feed @endif">
                        <div class="image" style="background-image: url('storage/icons/fgplaceholder.png')">
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
                @endif
            @endforeach

        </section>





        <x-genie-cards :feeds="$newsFeed" cardType="TOP_HALF_BIG" section="exchange" title="Exchange news" limit="6" />

        <x-genie-cards :feeds="$newsFeed" cardType="SMALL" section="prediction" title="Predictions" limit="8" />
        <x-genie-cards :feeds="$newsFeed" cardType="BIG" section="press-release" title="Press Release" limit="6" />
        <x-genie-cards :feeds="$newsFeed" cardType="SMALL" section="paid" title="Sponsored" limit="8" />
        <x-genie-cards :feeds="$newsFeed" cardType="SMALL" section="learn" title="Learn" limit="8" />

    </div>
</x-app-layout>
