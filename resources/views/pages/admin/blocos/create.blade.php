@extends('adminlte::page')

@extends('templates.template')

@section('title', 'Cadastrar Novo Bloco')

@section('content_header')
    <h1>Dashboard</h1>
    <hr>
@stop

@section('content')
    <h1>Cadastrar Novo Bloco</h1>

    <div class="card">
        <div class="card-body">
            <form action="{{ route('blocos.store') }}" class="form" method="POST">
                @csrf

                @include('pages.admin.blocos._partials.form')
            </form>
        </div>
    </div>

@stop
