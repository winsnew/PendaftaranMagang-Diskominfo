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
    
    <!-- fullcalendar css  -->
    <link href='https://cdn.jsdelivr.net/npm/fullcalendar@5.8.0/main.css' rel='stylesheet' />
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
        <main class="relative w-full min-h-screen py-10 overflow-y-auto dark:bg-gray-800">
            {{ $slot }}
        </main>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src='https://cdn.jsdelivr.net/npm/fullcalendar@5.8.0/main.js'></script>
    <script src="{{ asset('js/fullcalendar/core/main.js') }}"></script>
    <script src="{{ asset('js/fullcalendar/daygrid/main.js') }}"></script>
    <script src="{{ asset('js/fullcalendar/timegrid/main.js') }}"></script>
    <script src="{{ asset('js/fullcalendar/interaction/main.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js" integrity="sha512-qTXRIMyZIFb8iQcfjXWCO8+M5Tbc38Qi5WzdPOYZHIlZpzBHG3L3by84BBBOiRGiEb7KKtAOAs5qYdUiZiQNNQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
   
    <script>
        // On page load or when changing themes, best to add inline in `head` to avoid FOUC
        if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark')
        }

        document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar');
            var calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'dayGridMonth',
                events: [],
                selectOverlap: function(event) {
                    return event.rendering === 'background';
                }
            });

            calendar.render();
        });
        document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendaruser');
            var calendar = new FullCalendar.Calendar(calendarEl, {
                plugins: ['dayGrid', 'timeGrid', 'interaction'],
                events: []
            });
            calendar.render();
        });
    </script>
    
</body>

</html>