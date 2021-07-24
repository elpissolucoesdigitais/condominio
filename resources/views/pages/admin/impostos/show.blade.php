@extends('adminlte::page')

@extends('templates.template')

@section('title', "Detalhes do imposto {$imposto->nome}")

@section('content_header')
    <h1>Dashboard</h1>
    <hr>
@stop

@section('content')

    <h1>Detalhes do Imposto {{$imposto->nome}}</h1>

    <div class="card">
        <div class="card-body">
            <ul>
                <li>
                    <strong>Identificador do imposto: </strong> {{ $imposto->id }}
                </li>
                <li>
                    <strong>IPTU: </strong> {{$imposto->iptu }}
                </li>
                <li>
                    <strong>INPC:</strong> {{$imposto->inpc}}
                </li>
                <li>
                    <strong>Receita Federal:</strong> {{ $imposto->receita_federal }}
                </li>
                <li>
                    <strong>Rais:</strong> {{ $imposto->rais }}
                </li>
                <li>
                    <strong>Descrição: </strong> {{ $imposto->descricao }}
                </li>

            </ul>
            @include('pages.includes.alerts')
            <form action="{{ route('impostos.destroy', $imposto->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i> DELETAR {{ $imposto->nome }}</button>
            </form>
        </div>
    </div>

@stop
