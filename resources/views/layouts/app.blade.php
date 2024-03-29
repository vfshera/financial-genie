<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @if (isset($postseo))
        {{ $postseo }}
    @else
        {!! seo() !!}
    @endif
    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    @livewireStyles


</head>

<body class="financial-genie-site">

    <x-navbar />


    <main class="financial-genie-content">
        {{ $slot }}
    </main>

    <x-footer />
    @stack('modals')

    @livewireScripts


    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
</body>

</html>
