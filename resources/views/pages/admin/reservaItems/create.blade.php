@extends('adminlte::page')

@extends('templates.template')

@section('title', 'Cadastrar Novo Item Reserva')

@section('content_header')
    <h1>Dashboard</h1>
    <hr>
@stop

@section('content')
    <h1>Cadastrar Novo Item Reserva</h1>

    <div class="card">
        <div class="card-body">
            <form action="{{ route('reservaItems.store') }}" class="form" method="POST">
                @csrf

                @include('pages.admin.reservaItems._partials.form')
            </form>
        </div>
    </div>

@stop
