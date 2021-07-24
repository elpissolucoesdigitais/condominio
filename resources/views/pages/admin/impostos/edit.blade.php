@extends('adminlte::page')

@extends('templates.template')

@section('title', "Editar o imposto {$imposto->nome}")

@section('content_header')
    <h1>Dashboard</h1>
    <hr>
@stop

@section('content')

    <h1>Editar o Imposto {{$imposto->descricao}}</h1>

    <div class="card">
        <div class="card-body">
            <form action="{{ route('impostos.update', $imposto->id) }}" class="form" method="POST">
                @csrf
                @method('PUT')

                @include('pages.admin.impostos._partials.form')
            </form>
        </div>
    </div>
@stop
