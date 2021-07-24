@extends('adminlte::page')

@extends('templates.template')

@section('title', "Editar o Permissão {$permission->nome}")

@section('content_header')
    <h1>Dashboard</h1>
    <hr>
@stop

@section('content')
    <h1>Editar o Permissões {{$permission->nome}}</h1>

    <div class="card">
        <div class="card-body">
            <form action="{{ route('permissions.update', $permissao->id) }}" class="form" method="POST">
                @csrf
                @method('PUT')

                @include('pages.admin.permissions._partials.form')
            </form>
        </div>
    </div>
@stop
