@extends('adminlte::page')

@extends('templates.template')

@section('title', "Detalhes do Morador {$morador->nome}")

@section('content_header')
    <h1>Dashboard</h1>
    <hr>
@stop

@section('content')
    <h1>Detalhes do morador {{$morador->nome}}</b></h1>

    <div class="card">
        <div class="card-body">
            <ul>
                <li>
                    <strong>Identificador do Morador: </strong> {{ $morador->id }}
                </li>
                <li>
                    <strong>Nome: </strong> {{$morador->nome }}
                </li>
                <li>
                    <strong>Email:</strong> {{ $morador->email }}
                </li>
                <li>
                    <strong>Celular:</strong> {{ $morador->cpf }}
                </li>
                <li>
                    <strong>Morador Ativo: </strong> {{$morador->morador_ativo }}
                </li>
                <li>
                    <strong>CPF: </strong> {{ $morador->cpf }}
                </li>
                <li>
                    <strong>RG: </strong> {{$morador->rg }}
                </li>
                <li>
                    <strong>Data Cadastro:</strong> {{ $morador->data_cadastro }}
                </li>


            </ul>

            @include('pages.includes.alerts')

            <form action="{{ route('moradores.destroy', $morador->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i> DELETAR O MORADOR{{ $morador->nome }}</button>
            </form>
        </div>
    </div>
@stop
