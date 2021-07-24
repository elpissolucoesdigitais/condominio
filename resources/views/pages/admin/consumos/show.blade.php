@extends('adminlte::page')

@extends('templates.template')

@section('title', "Detalhes do consumo {$consumo->nome}")

@section('content_header')
    <h1>Dashboard</h1>
    <hr>
@stop

@section('content')

    <h1>Detalhes do Consumo {{$consumo->nome}}</h1>

    <div class="card">
        <div class="card-body">
            <ul>
                <li>
                    <strong>Identificador do consumo: </strong> {{ $consumo->id }}
                </li>
                <li>
                    <strong>Tipo Consumo: </strong>

                        {{$consumo->tipo_consumo}}

                </li>
                <li>
                    <strong>Valor: </strong> {{ $consumo->valor }}
                </li>
                <li>
                    <strong>Data de Competência: </strong> {{ $consumo->data_competencia }}
                </li>
                <li>
                    <strong>Data de Vencimento: </strong> {{ $consumo->vencimento }}
                </li>
                <li>
                    <strong>Status: </strong>

                        {{$consumo->status}}

                </li>
                <li>
                    <strong>Descrição: </strong> {{ $consumo->descricao }}
                </li>
                <li>
                    <strong>Apartamento: </strong>
                    @foreach ($apartamentos as $apartamento)
                        {{$apartamento->numero}}
                    @endforeach
                </li>
            </ul>
            @include('pages.includes.alerts')
            <form action="{{ route('consumos.destroy', $consumo->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i> DELETAR {{ $consumo->nome }}</button>
            </form>
        </div>
    </div>

@stop
