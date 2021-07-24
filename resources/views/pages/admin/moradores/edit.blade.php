@extends('adminlte::page')

@extends('templates.template')

@section('title', "Editar o Morador {$morador->nome}")

@section('content_header')
    <h1>Dashboard</h1>
    <hr>
@stop

@section('content')
    <h1>Editar o Morador {{$morador->nome}}</h1>

    <div class="card">
        <div class="card-body">
            <form action="{{ route('moradores.update', $morador->id) }}" class="form" method="POST">
                @csrf
                @method('PUT')

                @include('pages.admin.moradores._partials.form')
            </form>
        </div>
    </div>
@stop
