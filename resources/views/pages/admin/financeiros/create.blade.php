@extends('adminlte::page')

@extends('templates.template')

@section('title', 'Cadastrar Financeiro')

@section('content_header')
    <h1>Dashboard</h1>
    <hr>
@stop

@section('content')
    <h1>Cadastrar Financeiro</h1>

    <div class="card">
        <div class="card-body">
            <form action="{{ route('financeiros.store') }}" class="form" method="POST">
                @csrf

                @include('pages.admin.financeiros._partials.form')
            </form>
        </div>
    </div>

@stop
