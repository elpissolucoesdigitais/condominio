@extends('adminlte::page')

@extends('templates.template')

@section('title', "Detalhes do vaga {$vaga->nome}")

@section('content_header')
    <h1>Dashboard</h1>
    <hr>
@stop

@section('content')
    <h1>Detalhes do vaga {{$vaga->nome}}</b></h1>

    <div class="card">
        <div class="card-body">
            <ul>
                <li>
                    <strong>Identificador do vaga: </strong> {{ $vaga->id }}
                </li>
                <li>
                    <strong>Nome: </strong> {{ $vaga->numero }}
                </li>

                <li>
                    <strong>Criado: </strong> {{  $vaga->created_at}}
                </li>
            </ul>

            @include('pages.includes.alerts')

            <form action="{{ route('vagas.destroy', $vaga->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i> DELETAR O VAGA{{ $vaga->numero }}</button>
            </form>
        </div>
    </div>
@stop
