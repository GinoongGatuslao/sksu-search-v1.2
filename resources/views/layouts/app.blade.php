<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="bg-primary-text">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/paper-css/0.3.0/paper.css"> --}}
    <script src="{{ mix('js/app.js') }}" defer></script>

    @livewireStyles

    <!-- Scripts -->
    <style>
        [x-cloak] {
            display: none !important;
        }

    </style>


</head>

<body class="font-sans bg-gradient-to-br from-main-bg via-main-bg to-bg-white">
    <div class="min-h-screen">
        @livewire('navigation-menu')

        <!-- Page Heading -->
        @if (isset($header))
        <header class="bg-white shadow">
            <div class="px-4 py-6 mx-auto max-w-7xl sm:px-6 lg:px-8">
                {{ $header }}
            </div>
        </header>
        @endif

        <!-- Page Content -->
        <main class="bg-transparent">
            {{ $slot }}
        </main>

    </div>
    <!-- <div class="relative bottom-0">@include('footer')</div> -->
    @stack('modals')
    @stack('scripts')
    @livewireScripts
    <!-- <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script> -->
    <script src="{{ asset('vendor/livewire-alert/livewire-alert.js') }}"></script>
    <x-livewire-alert::scripts />
    <x-livewire-alert::flash />

</body>

</html>
