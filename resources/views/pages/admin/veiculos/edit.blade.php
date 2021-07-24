@extends('adminlte::page')

@extends('templates.template')

@section('title', "Editar Reserva {$reserva->status}")

@section('content_header')
    <h1>Dashboard</h1>
    <hr>
@stop

@section('content')
    <h1>Editar reserva {{$reserva->status}}</h1>

    <div class="card">
        <div class="card-body">
            <form action="{{ route('reservas.update', $reserva->id) }}" class="form" method="POST">
                @csrf
                @method('PUT')

                @include('pages.admin.reservas._partials.form')
            </form>
        </div>
    </div>
@stop
