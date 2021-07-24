@extends('adminlte::page')

@extends('templates.template')

@section('title', "Editar bloco {$bloco->nome}")

@section('content_header')
    <h1>Dashboard</h1>
    <hr>
@stop

@section('content')
    <h1>Editar bloco {{$bloco->nome}}</h1>

    <div class="card">
        <div class="card-body">
            <form action="{{ route('blocos.update', $bloco->id) }}" class="form" method="POST">
                @csrf
                @method('PUT')

                @include('pages.admin.blocos._partials.form')
            </form>
        </div>
    </div>
@stop
