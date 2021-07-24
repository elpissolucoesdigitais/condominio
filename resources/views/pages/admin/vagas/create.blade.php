@extends('adminlte::page')

@extends('templates.template')

@section('title', 'Cadastrar Novo Vaga')

@section('content_header')
    <h1>Dashboard</h1>
    <hr>
@stop

@section('content')
    <h1>Cadastrar Novo vaga</h1>

    <div class="card">
        <div class="card-body">
            <form action="{{ route('vagas.store') }}" class="form" method="POST">
                @csrf

                @include('pages.admin.vagas._partials.form')
            </form>
        </div>
    </div>
@stop
