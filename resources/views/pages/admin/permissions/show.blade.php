@extends('adminlte::page')

@extends('templates.template')

@section('title', "Detalhes do Permissões {$permission->nome}")

@section('content_header')
    <h1>Dashboard</h1>
    <hr>
@stop

@section('content')
    <h1>Detalhes da permissão {{$permission->nome}}</b></h1>

    <div class="card">
        <div class="card-body">
            <ul>
                <li>
                    <strong>Nome da permissão: </strong> {{ $permission->nome }}
                </li>


            </ul>

            @include('pages.includes.alerts')

            <form action="{{ route('permissions.destroy', $permission->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i> DELETAR O PERMISSÕES{{ $permission->nome }}</button>
            </form>
        </div>
    </div>
@stop
