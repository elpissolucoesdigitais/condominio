@extends('adminlte::page')

@extends('templates.template')

@section('title', 'Cadastrar Nova Permissão')

@section('content_header')
    <h1>Dashboard</h1>
    <hr>
@stop

@section('content')
    <h1>Cadastrar Nova Permissão</h1>

    <div class="card">
        <div class="card-body">
            <form action="{{ route('permissions.store') }}" class="form" method="POST">
                @csrf

                @include('pages.admin.permissions._partials.form')
            </form>
        </div>
    </div>

@stop
