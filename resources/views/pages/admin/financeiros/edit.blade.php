@extends('adminlte::page')

@extends('templates.template')

@section('title', "Editar o Financeiro {$financeiro->nome}")

@section('content_header')
    <h1>Dashboard</h1>
    <hr>
@stop

@section('content')
    <h1>Editar Financeiro {{$financeiro->nome}}</h1>

    <div class="card">
        <div class="card-body">
            <form action="{{ route('financeiros.update', $financeiro->id) }}" class="form" method="POST">
                @csrf
                @method('PUT')

                @include('pages.admin.financeiros._partials.form')
            </form>
        </div>
    </div>
@stop
