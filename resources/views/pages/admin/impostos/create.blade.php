@extends('adminlte::page')

@extends('templates.template')

@section('title', 'Cadastrar Impostos')

@section('content_header')
    <h1>Dashboard</h1>
    <hr>
@stop

@section('content')

    <h1>Cadastrar Impostos</h1>

    <div class="card">
        <div class="card-body">
            <form action="{{ route('impostos.store') }}" class="form" method="POST">
                @csrf
                @include('pages.admin.impostos._partials.form')
            </form>
         </div>
    </div>
@stop

