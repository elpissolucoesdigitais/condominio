@extends('adminlte::page')

@extends('templates.template')

@section('title', "Detalhes do Financeiro {$financeiro->nome}")

@section('content_header')
    <h1>Dashboard</h1>
    <hr>
@stop

@section('content')

    <h1>Detalhes do Financeiro {{$financeiro->nome}}</b></h1>

    <div class="card">
        <div class="card-body">
            <ul>
                <li>
                    <strong>Identificador do Financeiro: </strong> {{ $financeiro->id }}
                </li>

                <li>
                    <strong>Criado: </strong> {{  $financeiro->data_financeiro}}
                </li>

            </ul>

            @include('pages.includes.alerts')

            <form action="{{ route('financeiros.destroy', $financeiro->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i> DELETAR O financeiro{{ $financeiro->nome }}</button>
            </form>
        </div>
    </div>
@stop
