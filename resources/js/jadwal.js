import { Calendar } from '@fullcalendar/core';
import dayGridPlugin from '@fullcalendar/daygrid';
import listPlugin from '@fullcalendar/list';

document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');

    var calendar = new Calendar(calendarEl, {
        plugins: [dayGridPlugin, listPlugin],
        defaultView: 'list',
        events: '/api/events', // Atur URL endpoint untuk mengambil data jadwal dari Laravel API
    });

    calendar.render();
});
