<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'FG') }} - Dashboard @if (isset($pageTitle))
            | {{ $pageTitle }}
        @endif
    </title>
    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    @livewireStyles


</head>

<body class="financial-genie-site">

    <div class="admin-dashboard">

        <header class="admin-head">
            <div class="admin-head-brand">
                <span class="text-[#01aef4]">FG</span><span class="text-gray-500">Admin</span>
            </div>

            <div class="admin-head-nav">
                Nav
            </div>
        </header>
        <section class="dashboard">

            <aside class="dashboard-sidebar">

                <section class="links">

                    @php
                        $postLinks = [['name' => 'Compose', 'path' => 'admin.posts.compose'], ['name' => 'My Posts', 'path' => 'admin.dashboard']];
                    @endphp
                    <x-admin.sidebar-link :active="request()->routeIs('admin.dashboard')" :link="route('admin.dashboard')">
                        Dashboard
                    </x-admin.sidebar-link>


                    @livewire('admin.sidebar-link-group', ['title' => "Posts", 'links'=>$postLinks, 'openIf'=>
                    request()->routeIs('admin.posts.*')])

                    {{-- <x-admin.sidebar-link-group title="Posts" :links="$postLinks" :open-if="request()->routeIs('admin.posts.*')" /> --}}


                    <x-admin.sidebar-link>
                        <x-slot name="icon">
                            00
                        </x-slot>
                        Say Something
                    </x-admin.sidebar-link>
                </section>





                <div class="copyright">&copy; Financial Genie {{ date('Y') }}</div>

            </aside>


            <main class="dashboard-view">
                {{ $slot }}
            </main>
        </section>
    </div>


    @stack('modals')
    @stack('scripts')

    @livewireScripts


    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
</body>

</html>
