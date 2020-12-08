@extends('layouts.home',compact('categories','expo_categories','pages','footer', 'facebook', 'twitter', 'instagram', 'telegram','logo','tel'))

@section('title', __('words.calender'))

@section('myheader')

<link href='{{ asset("lib/fullcalendar-scheduler/main.css") }}' rel='stylesheet' />
<script src='{{ asset("lib/fullcalendar-scheduler/main.js") }}'></script>

<script>

    document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');
        var calendar = new FullCalendar.Calendar(calendarEl, {
            initialView: 'dayGridMonth',
            events: [ {!!$events!!} ],
        });
        calendar.render();
    });

</script>

@endsection

@section('content')

<div class="container mt-2 mb-2">
    <div id='calendar'></div>
</div>
@endsection


@section('myfooter')
@endsection
