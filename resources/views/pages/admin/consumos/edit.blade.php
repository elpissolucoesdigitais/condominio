@extends('adminlte::page')

@extends('templates.template')

@section('title', "Editar Consumo")

@section('content_header')
    <h1>Dashboard</h1>
    <hr>
@stop

@section('content')

    <h1>Editar o Consumo</h1>

    <div class="card">
        <div class="card-body">
            <form action="{{ route('consumos.update', $consumo->id) }}" class="form" method="POST">
                @csrf
                @method('PUT')

                @include('pages.admin.consumos._partials.form')
            </form>
        </div>
    </div>
@stop
