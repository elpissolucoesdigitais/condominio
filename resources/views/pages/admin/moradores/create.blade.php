@extends('adminlte::page')

@extends('templates.template')

@section('title', 'Cadastrar Novo Morador')

@section('content_header')
    <h1>Dashboard</h1>
    <hr>
@stop

@section('content')
    <h1>Cadastrar Novo Morador</h1>

    <div class="card">
        <div class="card-body">
            <form action="{{ route('moradores.store') }}" class="form" method="POST">
                @csrf

                @include('pages.admin.moradores._partials.form')
            </form>
        </div>
    </div>

@stop
