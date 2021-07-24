@extends('adminlte::page')

@extends('templates.template')

@section('title', "Detalhes da controlePagamento {$controlePagamento->nome}")

@section('content_header')
    <h1>Dashboard</h1>
    <hr>
@stop

@section('content')
    <h1>Detalhes da controlePagamento {{$controlePagamento->nome}}</b></h1>

    <div class="card">
        <div class="card-body">
            <ul>
                <li>
                    <strong>Identificador da Controle Pagamento: </strong> {{ $controlePagamento->id }}
                </li>
                <li>
                    <strong>Status: </strong> {{ $controlePagamento->status }}
                </li>

                <li>
                    <strong>Total Aberto: </strong> {{  $controlePagamento->total_aberto}}
                </li>
                <li>
                    <strong>Total Pago: </strong> {{ $controlePagamento->total_pago }}
                </li>
                <li>
                    <strong>Total a Pagar: </strong> {{ $controlePagamento->total_a_pagar }}
                </li>
                <li>
                    <strong>Multas: </strong> {{  $controlePagamento->multas}}
                </li>
                <li>
                    <strong>Outros: </strong> {{ $controlePagamento->outros }}
                </li>
                <li>
                    <strong>Observações: </strong> {{ $controlePagamento->observacoes }}
                </li>

            </ul>

            @include('pages.includes.alerts')

            <form action="{{ route('controlePagamentos.destroy', $controlePagamento->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i> DELETAR {{ $controlePagamento->status }}</button>
            </form>
        </div>
    </div>
@stop
