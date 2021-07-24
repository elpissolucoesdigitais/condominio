@extends('adminlte::page')

@extends('templates.template')

@section('title', 'Cadastrar Novo apartamento')

@section('content_header')
    <h1>Dashboard</h1>
    <hr>
@stop

@section('content')

    <h1>Cadastrar Novo apartamento</h1>

    <div class="card">
        <div class="card-body">
            <form action="{{ route('apartamentos.store') }}" class="form" method="POST">
                @csrf

                @include('pages.admin.apartamentos._partials.form')
            </form>
        </div>
    </div>

@stop
