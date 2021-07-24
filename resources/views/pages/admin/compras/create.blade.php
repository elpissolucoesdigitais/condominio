@extends('adminlte::page')

@extends('templates.template')

@section('title', 'Cadastrar Nova Compra')

@section('content_header')
    <h1>Dashboard</h1>
    <hr>
@stop

@section('content')
    <h1>Cadastrar Nova Compra</h1>

    <div class="card">
        <div class="card-body">
            <form action="{{ route('compras.store') }}" class="form" method="POST">
                @csrf

                @include('pages.admin.compras._partials.form')
            </form>
        </div>
    </div>

@stop
