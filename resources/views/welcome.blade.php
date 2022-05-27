<x-app-layout>
    <div class="welcome-page">

        <section class="news fg-container" id="news">

            @foreach ($newsFeed as $key => $feed)
                @if ($key < 7)
                    @php
                        $isEnlarged = false;
                        $section = 'feed';
                        $cardType = 'SMALL';
                        $withBigFirst = true;
                    @endphp


                    <x-genie-card-item :big-first="$withBigFirst" :card="$feed" :enlarged="$isEnlarged" :section="$section"
                        :type="$cardType" :index="$key" />
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
