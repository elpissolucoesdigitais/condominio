@extends('adminlte::page')

@extends('templates.template')

@section('title', "Detalhes do Perfil {$profile->nome}")

@section('content_header')
    <h1>Dashboard</h1>
    <hr>
@stop

@section('content')
    <h1>Detalhes do Perfil {{$profile->nome}}</b></h1>

    <div class="card">
        <div class="card-body">
            <ul>
                <li>
                    <strong>Nome do perfil: </strong> {{ $profile->nome }}
                </li>


            </ul>

            @include('pages.includes.alerts')

            <form action="{{ route('profiles.destroy', $profile->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i> DELETAR O PERFIL{{ $profile->nome }}</button>
            </form>
        </div>
    </div>
@stop
