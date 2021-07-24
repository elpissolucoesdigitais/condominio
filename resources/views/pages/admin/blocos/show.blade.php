@extends('adminlte::page')

@extends('templates.template')

@section('title', "Detalhes do Bloco {$bloco->nome}")

@section('content_header')
    <h1>Dashboard</h1>
    <hr>
@stop

@section('content')
    <h1>Detalhes do bloco {{$bloco->nome}}</b></h1>

    <div class="card">
        <div class="card-body">
            <ul>
                <li>
                    <strong>Identificador do bloco: </strong> {{ $bloco->id }}
                </li>
                <li>
                    <strong>Nome: </strong> {{ $bloco->nome }}
                </li>

                <li>
                    <strong>Criado: </strong> {{  $bloco->created_at}}
                </li>
            </ul>

            @include('pages.includes.alerts')

            <form action="{{ route('blocos.destroy', $bloco->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i> DELETAR O BLOCO{{ $bloco->nome }}</button>
            </form>
        </div>
    </div>
@stop
