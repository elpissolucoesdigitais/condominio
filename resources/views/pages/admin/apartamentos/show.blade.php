@extends('adminlte::page')

@extends('templates.template')

@section('title', "Detalhes do apartamento {$apartamento->nome}")

@section('content_header')
    <h1>Dashboard</h1>
    <hr>
@stop

@section('content')
    <h1>Detalhes do apartamento {{$apartamento->nome}}</b></h1>

    <div class="card">
        <div class="card-body">
            <ul>
                <li>
                    <strong>Identificador do apartamento: </strong> {{ $apartamento->id }}
                </li>
                <li>
                    <strong>Apartamento: </strong> {{ $apartamento->numero }}
                </li>

                <li>
                    <strong>Andar: </strong> {{  $apartamento->andar}}
                </li>
                <li>
                    <strong>Interfone: </strong> {{  $apartamento->interfone}}
                </li>
                <li>
                    <strong>Valor: R$</strong> {{ $apartamento->valor}}
                </li>
                <li>
                    <strong>Bloco: </strong> {{ $apartamento->bloco_id}}
                </li>
            </ul>

            @include('pages.includes.alerts')

            <form action="{{ route('apartamentos.destroy', $apartamento->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i> DELETAR O APARTAMENTO{{ $apartamento->numero }}</button>
            </form>
        </div>
    </div>
@stop
