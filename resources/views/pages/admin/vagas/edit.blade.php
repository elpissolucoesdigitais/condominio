@extends('adminlte::page')

@extends('templates.template')

@section('title', "Editar Vaga {$vaga->nome}")

@section('content_header')
    <h1>Dashboard</h1>
    <hr>
@stop

@section('content')
    <h1>Editar vaga {{$vaga->nome}}</h1>

    <div class="card">
        <div class="card-body">
            <form action="{{ route('vagas.update', $vaga->id) }}" class="form" method="POST">
                @csrf
                @method('PUT')

                @include('pages.admin.vagas._partials.form')
            </form>
        </div>
    </div>
@stop
