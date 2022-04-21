<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    @livewireStyles


</head>

<body class="financial-genie-site">

    <div class="admin-dashboard">

        <header class="admin-head">

        </header>
        <section class="dashboard">

            <aside class="admin-sidebar">
                aaa
            </aside>


            <main class="dashboard-view">
                gdgd
                {{ $slot }}
            </main>
        </section>
    </div>


    @stack('modals')

    @livewireScripts


    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
</body>

</html>
