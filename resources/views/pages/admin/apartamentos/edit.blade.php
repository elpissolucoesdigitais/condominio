@extends('adminlte::page')

@extends('templates.template')

@section('title', "Editar o apartamento {$apartamento->nome}")

@section('content_header')
    <h1>Dashboard</h1>
    <hr>
@stop

@section('content')

    <h1>Editar apartamento {{$apartamento->nome}}</h1>

    <div class="card">
        <div class="card-body">
            <form action="{{ route('apartamentos.update', $apartamento->id) }}" class="form" method="POST">
                @csrf
                @method('PUT')

                @include('pages.admin.apartamentos._partials.form')
            </form>
        </div>
    </div>
@stop
