@extends('adminlte::page')

@extends('templates.template')

@section('title', "Editar Compra {$compra->titulo}")

@section('content_header')
    <h1>Dashboard</h1>
    <hr>
@stop

@section('content')
    <h1>Editar Compra {{$compra->titulo}}</h1>

    <div class="card">
        <div class="card-body">
            <form action="{{ route('compras.update', $compra->id) }}" class="form" method="POST">
                @csrf
                @method('PUT')

                @include('pages.admin.compras._partials.form')
            </form>
        </div>
    </div>
@stop
