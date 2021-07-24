@extends('adminlte::page')

@extends('templates.template')

@section('title', "Detalhes da fluxoCaixa {$fluxoCaixa->nome}")

@section('content_header')
    <h1>Dashboard</h1>
    <hr>
@stop

@section('content')
    <h1>Detalhes da fluxoCaixa {{$fluxoCaixa->nome}}</b></h1>

    <div class="card">
        <div class="card-body">
            <ul>
                <li>
                    <strong>Identificador da fluxoCaixa: </strong> {{ $fluxoCaixa->id }}
                </li>
                <li>
                    <strong>Nome: </strong> {{ $fluxoCaixa->nome }}
                </li>

                <li>
                    <strong>Descrição: </strong> {{  $fluxoCaixa->rg}}
                </li>
                <li>
                    <strong>Valor Total: </strong> {{ $fluxoCaixa->cpf }}
                </li>
                <li>
                    <strong>Valor Entrada: </strong> {{ $fluxoCaixa->valor_entrada }}
                </li>
                <li>
                    <strong>Data Entrada: </strong> {{  $fluxoCaixa->data_entrada}}
                </li>
                <li>
                    <strong>Valor Saida: </strong> {{ $fluxoCaixa->valor_saida }}
                </li>
                <li>
                    <strong>Data Saida: </strong> {{ $fluxoCaixa->data_saida }}
                </li>
                <li>
                    <strong>Criado: </strong> {{  $fluxoCaixa->created_at}}
                </li>
            </ul>

            @include('pages.includes.alerts')

            <form action="{{ route('fluxoCaixas.destroy', $fluxoCaixa->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i> DELETAR {{ $fluxoCaixa->nome }}</button>
            </form>
        </div>
    </div>
@stop
