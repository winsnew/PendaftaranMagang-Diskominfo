<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <script src="https://code.highcharts.com/highcharts.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<!-- ... -->

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased ">
        <div class="bg-gray-50 dark:bg-gray-800">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="fixed border-b border-gray-200 dark:bg-gray-800 dark:border-gray-700">
                    <div class="container py-3 mx-auto">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main class="relative w-full h-full overflow-y-auto lg:ml-64 dark:bg-gray-900">
                {{ $slot }}
            </main>
        </div>
        <script>
    // On page load or when changing themes, best to add inline in `head` to avoid FOUC
    if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
        document.documentElement.classList.add('dark');
    } else {
        document.documentElement.classList.remove('dark')
    }
</script>
    </body>
    
</html>
