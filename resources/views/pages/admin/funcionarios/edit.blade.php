@extends('adminlte::page')

@extends('templates.template')

@section('title', "Editar o morador {$funcionario->nome}")

@section('content_header')
    <h1>Dashboard</h1>
    <hr>
@stop

@section('content')

    <h1>Editar o funcionario {{$funcionario->nome}}</h1>

    <div class="card">
        <div class="card-body">
            <form action="{{ route('funcionarios.update', $funcionario->id) }}" class="form" method="POST">
                @csrf
                @method('PUT')

                @include('pages.admin.funcionarios._partials.form')
            </form>
        </div>
    </div>
@stop
