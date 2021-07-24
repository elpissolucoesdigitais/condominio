@extends('adminlte::page')

@extends('templates.template')

@section('title', 'Cadastrar Despesas')

@section('content_header')
    <h1>Dashboard</h1>
    <hr>
@stop

@section('content')

    <h1>Cadastrar Despesas</h1>

    <div class="card">
        <div class="card-body">
            <form action="{{ route('consumos.store') }}" class="form" method="POST">
                @csrf
                @include('pages.admin.consumos._partials.form')
            </form>
         </div>
    </div>
@stop

