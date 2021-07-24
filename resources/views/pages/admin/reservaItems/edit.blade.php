@extends('adminlte::page')

@extends('templates.template')

@section('title', "Editar Item Para Reserva {$reservaItem->nome}")

@section('content_header')
    <h1>Dashboard</h1>
    <hr>
@stop

@section('content')
    <h1>Editar Item Para Reserva {{$reservaItem->nome}}</h1>

    <div class="card">
        <div class="card-body">
            <form action="{{ route('reservaItems.update', $reservaItem->id) }}" class="form" method="POST">
                @csrf
                @method('PUT')

                @include('pages.admin.reservaItems._partials.form')
            </form>
        </div>
    </div>
@stop
