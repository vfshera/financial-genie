<div class="sidebar-link-group" x-data="{ showGroup: false }">

    <p class="group-title" @click="showGroup = ! showGroup"><span class="group-icon">
            &gtcc;</span> {{ $title }}</p>

    <div class="group-links" x-show="showGroup" x-transition:enter="transition ease-out duration-400"
        x-transition:enter-start="opacity-0 scale-90" x-transition:enter-end="opacity-100 scale-100"
        x-transition:leave="transition ease-in duration-300" x-transition:leave-start="opacity-100 scale-100"
        x-transition:leave-end="opacity-0 scale-90" x-cloak>
        @foreach ($links as $sidebarLink)
            @php
                $sidebarLink = (object) $sidebarLink;
                $sidebarLink->patth = $sidebarLink->path ?? 'admin.dashboard';
                $nested = true;
            @endphp
            <x-admin.sidebar-link :nested="$nested" :active="request()->routeIs($sidebarLink->path)" :link="route($sidebarLink->path)">
                {{ $sidebarLink->name }}
            </x-admin.sidebar-link>
        @endforeach
    </div>
</div>
