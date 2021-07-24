@extends('adminlte::page')

@extends('templates.template')

@section('title', 'Cadastrar Novo Funcionario')

@section('content_header')
    <h1>Dashboard</h1>
    <hr>
@stop

@section('content')

    <h1>Cadastrar Novo Funcionario</h1>

    <div class="card">
        <div class="card-body">
            <form action="{{ route('funcionarios.store') }}" class="form" method="POST">
                @csrf
                @include('pages.admin.funcionarios._partials.form')
            </form>
         </div>
    </div>
@stop

