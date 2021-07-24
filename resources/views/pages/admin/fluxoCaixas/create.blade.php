@extends('adminlte::page')

@extends('templates.template')

@section('title', 'Cadastrar Fluxo de Caixa')

@section('content_header')
    <h1>Dashboard</h1>
    <hr>
@stop

@section('content')
    <h1>Cadastrar Fluxo de Caixa</h1>

    <div class="card">
        <div class="card-body">
            <form action="{{ route('fluxoCaixas.store') }}" class="form" method="POST">
                @csrf

                @include('pages.admin.fluxoCaixas._partials.form')
            </form>
        </div>
    </div>
@stop
