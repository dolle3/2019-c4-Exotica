<!doctype html>
<html lang="nl">
<head>
    <meta charset="utf-8">
    <title>Exotica - Uw reptiel en amphibieën speciaalzaak</title>
    <link href=".././css/agenda.css" rel="stylesheet">
    <style>

        html, body {
            margin: 0;
            padding: 0;
            font-family: Arial, Helvetica Neue, Helvetica, sans-serif;
            font-size: 14px;
        }

        #calendar {
            max-width: 900px;
            margin: 40px auto;
        }
        #calendar1{
            max-width: 900px;
            margin: 40px auto;
        }
        h1{
            text-align: center;
        }

    </style>
    <link href="https://unpkg.com/@fullcalendar/core@4.3.1/main.min.css" rel="stylesheet">
    <link href="https://unpkg.com/@fullcalendar/daygrid@4.3.0/main.min.css" rel="stylesheet">
    <script src="/assets/demo-to-codepen.js"></script>
    <script src="https://unpkg.com/@fullcalendar/core@4.3.1/main.min.js"></script>
    <script src="https://unpkg.com/@fullcalendar/daygrid@4.3.0/main.min.js"></script>
</head>
    <title>Exotica - Uw reptiel en amphibieën speciaalzaak</title>
</head>
<body>
    <h1>Kalendar</h1>
<div id='calendar'></div>

</body>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://unpkg.com/@fullcalendar/core@4.3.1/main.min.js"></script>
<script src="https://unpkg.com/@fullcalender/daygrid@4.3.0/main.min.js"></script><script>
    document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');

        var calendar = new FullCalendar.Calendar(calendarEl, {
            plugins: [ 'dayGrid' ],
            defaultView: 'dayGridMonth',
            header: {
                center: 'addEventButton, addEventButton1'
            },
            customButtons: {
                addEventButton: {
                    text: 'na zorg dier',
                    click: function() {
                        var dateStr = prompt('Enter a date in YYYY-MM-DD format');
                        var date = new Date(dateStr + 'T00:00:00'); // will be in local time

                        if (!isNaN(date.valueOf())) { // valid?
                            calendar.addEvent({
                                title: 'afspraak na zorg dier',
                                start: date,
                                allDay: true
                            });
                            alert('u heeft een afspraak gemaakt');
                        } else {
                            alert('Invalid date.');
                        }
                    }
                },
                addEventButton1: {
                    text: 'afspraak kopen dier',
                    click: function() {
                        var dataStr = prompt('enter a date in yyyy-mm-dd format');
                        var date = new Date(dataStr + 'T00:00:00');

                        if (!isNaN(date.valueOf())){
                            calendar.addEvent({
                                title: 'afspraak kopen dier',
                                start: date,
                                allDay: true
                            });
                            alert('u heeft een afspraak gemaakt');
                        } else {
                            alert('Invalid date.');
                        }
                    }
                }

            }
        });

        calendar.render();
    });
</script>
</body>
</html>

