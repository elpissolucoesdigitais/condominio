@extends('adminlte::page')

@extends('templates.template')

@section('title', "Editar Visita {$visita->nome}")

@section('content_header')
    <h1>Dashboard</h1>
    <hr>
@stop


@section('content')
    <h1>Editar Visita {{$visita->nome}}</h1>

    <div class="card">
        <div class="card-body">
            <form action="{{ route('visitas.update', $visita->id) }}" class="form" method="POST">
                @csrf
                @method('PUT')

                @include('pages.admin.visitas._partials.form')
            </form>
        </div>
    </div>
@stop
