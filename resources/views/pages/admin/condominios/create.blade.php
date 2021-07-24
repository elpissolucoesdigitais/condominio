@extends('adminlte::page')

@extends('templates.template')

@section('title', 'Cadastrar Novo Condominio')

@section('content_header')
    <h1>Dashboard</h1>
    <hr>
@stop

@section('content')

    <h1>Cadastrar Novo Condominio</h1>

    <div class="card">
        <div class="card-body">
            <form action="{{ route('condominios.store') }}" class="form" method="POST">
                @csrf
                @include('pages.admin.condominios._partials.form')
            </form>
         </div>
    </div>
@stop

