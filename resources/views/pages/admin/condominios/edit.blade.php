@extends('adminlte::page')

@extends('templates.template')

@section('title', "Editar o Condominio {$condominio->nome}")

@section('content_header')
    <h1>Dashboard</h1>
    <hr>
@stop

@section('content')

    <h1>Editar o Condominio {{$condominio->nome}}</h1>

    <div class="card">
        <div class="card-body">
            <form action="{{ route('condominios.update', $condominio->id) }}" class="form" method="POST">
                @csrf
                @method('PUT')

                @include('pages.admin.condominios._partials.form')
            </form>
        </div>
    </div>
@stop
