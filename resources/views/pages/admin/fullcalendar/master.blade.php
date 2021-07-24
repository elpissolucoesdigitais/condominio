@extends('adminlte::page')

@section('title', 'blocos')

@section('content_header')
    <h1>Eventos</h1>
    <hr>
@stop

@section('content')
<!DOCTYPE html>
    <html>
        <head>
            <meta charset='utf-8' />

            <link href='{{asset('assets/fullcalendar/packages/core/main.css')}}' rel='stylesheet' />
            <link href='{{asset('assets/fullcalendar/packages/daygrid/main.css')}}' rel='stylesheet' />
            <link href='{{asset('assets/fullcalendar/packages/timegrid/main.css')}}' rel='stylesheet' />
            <link href='{{asset('assets/fullcalendar/packages/list/main.css')}}' rel='stylesheet' />

            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
            <link href='{{asset('assets/fullcalendar/css/style.css')}}' rel='stylesheet' />

            <meta name="csrf-token" content="{{ csrf_token() }}">
        </head>

        <body>

            @include('pages.admin.fullcalendar.modal-calendar')

            <div id='wrap'>

                <div
                    id='calendar',
                    data-route-load-events="{{route('routeLoadEvents')}}"
                    data-route-event-update="{{route('routeEventUpdate')}}"
                    data-route-event-store="{{route('routeEventStore')}}"
                    data-route-event-delete="{{route('routeEventDelete')}}"
                ></div>

                <div style='clear:both'></div>

            </div>

        </body>
    </html>

@stop
