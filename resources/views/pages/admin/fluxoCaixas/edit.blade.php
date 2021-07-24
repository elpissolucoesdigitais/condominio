@extends('adminlte::page')

@extends('templates.template')

@section('title', "Editar fluxoCaixa {$fluxoCaixa->nome}")

@section('content_header')
    <h1>Dashboard</h1>
    <hr>
@stop


@section('content')
    <h1>Editar Fluxo de Caixa {{$fluxoCaixa->nome}}</h1>

    <div class="card">
        <div class="card-body">
            <form action="{{ route('fluxoCaixas.update', $fluxoCaixa->id) }}" class="form" method="POST">
                @csrf
                @method('PUT')

                @include('pages.admin.fluxoCaixas._partials.form')
            </form>
        </div>
    </div>
@stop
