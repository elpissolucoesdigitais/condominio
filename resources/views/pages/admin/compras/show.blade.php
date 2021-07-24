@extends('adminlte::page')

@extends('templates.template')

@section('title', "Detalhes da compra {$compra->status}")

@section('content_header')
    <h1>Dashboard</h1>
    <hr>
@stop

@section('content')
    <h1>Detalhes da Compra {{$compra->titulo}}</b></h1>

    <div class="card">
        <div class="card-body">
            <ul>
                <li>
                    <strong>Identificador da compra: </strong> {{ $compra->id }}
                </li>
                <li>
                    <strong>Título: </strong> {{ $compra->titulo }}
                </li>

                <li>
                    <strong>Produto: </strong> {{  $compra->produto}}
                </li>

                <li>
                    <strong>Observação: </strong> {{  $compra->observacao}}
                </li>

                <li>
                    <strong>Valor: </strong> {{  $compra->valor}}
                </li>

                <li>
                    <strong>Quantidade: </strong> {{  $compra->quantidade}}
                </li>

                <li>
                    <strong>Valor Total: </strong> {{  $compra->valor_total}}
                </li>
            </ul>

            @include('pages.includes.alerts')

            <form action="{{ route('compras.destroy', $compra->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i> DELETAR COMPRA{{ $compra->titulo }}</button>
            </form>
        </div>
    </div>
@stop
