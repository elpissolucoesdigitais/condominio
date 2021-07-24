@extends('adminlte::page')

@extends('templates.template')

@section('title', 'Cadastrar Controle de Pagamento')

@section('content_header')
    <h1>Dashboard</h1>
    <hr>
@stop

@section('content')
    <h1>Cadastrar Controle de Pagamento</h1>

    <div class="card">
        <div class="card-body">
            <form action="{{ route('controlePagamentos.store') }}" class="form" method="POST">
                @csrf

                @include('pages.admin.controlePagamentos._partials.form')
            </form>
        </div>
    </div>
@stop
