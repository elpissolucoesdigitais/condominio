@extends('adminlte::page')

@extends('templates.template')

@section('title', 'Cadastrar Novo Veiculo')

@section('content_header')
    <h1>Dashboard</h1>
    <hr>
@stop

@section('content')
    <h1>Cadastrar Novo Veiculo</h1>

    <div class="card">
        <div class="card-body">
            <form action="{{ route('veiculos.store') }}" class="form" method="POST">
                @csrf

                @include('pages.admin.veiculos._partials.form')
            </form>
        </div>
    </div>
@stop
