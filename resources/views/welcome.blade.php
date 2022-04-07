<x-app-layout>

    <div class="welcome-page">

        <section class="news fg-container" id="news">

            @foreach ($newsFeed as $key => $feed)
                @if ($key < 7)
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
                @endif
            @endforeach

        </section>


        <div class="exchange-wrapper fg-container" id="exchange">
            <header class="section-head">
                <p>Exchange news</p>
                <a href="#exchange">View All</a>
            </header>
            <section class="exchange-news ">
                @foreach ($newsFeed as $key => $exchange)
                    @if ($key < 6)
                        <div class="exchange @if ($key == 0 || $key == 1) enlarged-exchange @endif">
                            <div class="image">
                                <img src="https://picsum.photos/900/600?random={{ $key + 8 }}" alt="">

                                <p class="category">{{ $exchange->category }}</p>
                            </div>
                            <div class="info">
                                <p class="title">{{ $exchange->title }}</p>
                                <div class="info-group">
                                    <p class="author"><span>By</span>{{ $exchange->author }}</p>
                                    <p class="posted">{{ $exchange->posted }}</p>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </section>
        </div>


        <div class="prediction-wrapper small-cards-wrapper fg-container" id="prediction">
            <header class="section-head">
                <p>Predictions</p>
                <a href="#prediction">View All</a>
            </header>
            <section class="predictions small-cards">
                @foreach ($newsFeed as $key => $prediction)
                    @if ($key < 8)
                        <div class="prediction small-card">
                            <div class="image">
                                <img src="https://picsum.photos/900/600?random={{ $key + 15 }}" alt="">

                                <p class="category">{{ $prediction->category }}</p>
                            </div>
                            <div class="info">
                                <p class="title">{{ $prediction->title }}</p>
                                <div class="info-group">
                                    <p class="author"><span>By</span>{{ $prediction->author }}</p>
                                    <p class="posted">{{ $prediction->posted }}</p>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </section>
        </div>

        <div class="press-wrapper big-cards-wrapper fg-container" id="press">
            <header class="section-head">
                <p>Press Release</p>
                <a href="#predd">View All</a>
            </header>
            <section class="press-release big-cards">
                @foreach ($newsFeed as $key => $press)
                    @if ($key < 6)
                        <div class="press-release big-card">
                            <div class="image">
                                <img src="https://picsum.photos/900/600?random={{ $key + 15 }}" alt="">

                                <p class="category">{{ $press->category }}</p>
                            </div>
                            <div class="info">
                                <p class="title">{{ $press->title }}</p>
                                <div class="info-group">
                                    <p class="author"><span>By</span>{{ $press->author }}</p>
                                    <p class="posted">{{ $press->posted }}</p>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </section>
        </div>
    </div>



</x-app-layout>
