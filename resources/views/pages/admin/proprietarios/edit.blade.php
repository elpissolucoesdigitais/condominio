@extends('adminlte::page')



@section('title', "Editar o Proprietario {$proprietario->nome}")

@section('content_header')
    <h1>Dashboard</h1>
    <hr>
@stop

@section('content')

    <h1>Editar o Proprietario {{$proprietario->nome}}</h1>

    <div class="card">
        <div class="card-body">
            <form action="{{ route('proprietarios.update', $proprietario->id) }}" class="form" method="POST">
                @csrf
                @method('PUT')

                @include('pages.admin.proprietarios._partials.form')
            </form>
        </div>
    </div>
@stop
