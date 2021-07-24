@extends('adminlte::page')

@extends('templates.template')

@section('title', "Detalhes da visita {$visita->nome}")

@section('content_header')
    <h1>Dashboard</h1>
    <hr>
@stop

@section('content')
    <h1>Detalhes da Visita {{$visita->nome}}</b></h1>

    <div class="card">
        <div class="card-body">
            <ul>
                <li>
                    <strong>Identificador da Visita: </strong> {{ $visita->id }}
                </li>
                <li>
                    <strong>Nome: </strong> {{ $visita->nome }}
                </li>

                <li>
                    <strong>RG: </strong> {{  $visita->rg}}
                </li>
                <li>
                    <strong>CPF: </strong> {{ $visita->cpf }}
                </li>

                <li>
                    <strong>Data Entrada: </strong> {{  $visita->data_entrada}}
                </li>
                <li>
                    <strong>Data Saida: </strong> {{ $visita->data_saida }}
                </li>

                <li>
                    <strong>Criado: </strong> {{  $visita->created_at}}
                </li>
            </ul>

            @include('pages.includes.alerts')

            <form action="{{ route('visitas.destroy', $visita->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i> DELETAR A VISITA {{ $visita->nome }}</button>
            </form>
        </div>
    </div>
@stop
