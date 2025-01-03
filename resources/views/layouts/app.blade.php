<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- remix icon cnd --}}
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet" />

    <title>{{ config('app.name', 'V-Card') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />


    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    {{-- custom css link --}}
    <link rel="stylesheet" href="{{ asset('assets/backend/css/style.css') }}">
    @stack('styles')
  </head>

  <body class="font-Montserrat">
    <!-- start: Sidebar -->
    @include('layouts.partials.sidebar')
    <!-- end: Sidebar -->

    <!-- start: Main -->
    <main class="main min-h-screen w-full bg-gray-50 transition-all md:ml-64 md:w-[calc(100%-256px)]">
      {{-- start navber --}}
      @include('layouts.partials.navber')
      {{-- end navber --}}
      @yield('content')
    </main>

    <!-- end: Main -->
    <script src="https://unpkg.com/@popperjs/core@2"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    {{-- custom script  --}}
    <script src="{{ asset('assets/backend/js/app.js') }}"></script>
    @stack('scripts')
  </body>

</html>
