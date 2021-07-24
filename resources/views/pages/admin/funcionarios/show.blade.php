@extends('adminlte::page')

@extends('templates.template')

@section('title', "Detalhes do funcionario {$funcionario->nome}")

@section('content_header')
    <h1>Dashboard</h1>
    <hr>
@stop

@section('content')

    <h1>Detalhes do funcionario {{$funcionario->nome}}</h1>

    <div class="card">
        <div class="card-body">
            <ul>
                <li>
                    <strong>Identificador do morador: </strong> {{ $funcionario->id }}
                </li>
                <li>
                    <strong>Nome: </strong> {{$funcionario->nome }}
                </li>
                <li>
                    <strong>Data de Nascimento:</strong> {{$funcionario->data_nascimento}}
                </li>
                <li>
                    <strong>CPF:</strong> {{ $funcionario->cpf }}
                </li>
                <li>
                    <strong>RG:</strong> {{ $funcionario->rg }}
                </li>
                <li>
                    <strong>Logradouro: </strong> {{ $funcionario->logradouro }}
                </li>
                <li>
                    <strong>Bairro: </strong> {{$funcionario->bairro }}
                </li>
                <li>
                    <strong>Cidade: </strong> {{ $funcionario->cidade }}
                </li>
                <li>
                    <strong>UF: </strong> {{ $funcionario->uf }}
                </li>
                <li>
                    <strong>CEP: </strong> {{$funcionario->cep}}
                </li>
                <li>
                    <strong>Telefone Residencial: </strong> {{ $funcionario->telefone_residencial }}
                </li>
                <li>
                    <strong>Telefone Celular: </strong> {{ $funcionario->fone_celular }}
                </li>
                <li>
                    <strong>Email: </strong> {{$funcionario->email}}
                </li>
                <li>
                    <strong>Função: </strong> {{ $funcionario->funcao }}
                </li>
                <li>
                    <strong>Data Admissão: </strong> {{ $funcionario->data_admissao }}
                </li>
                <li>
                    <strong>Data Demissão: </strong> {{$funcionario->data_demissao}}
                </li>
                <li>
                    <strong>Salário: </strong> {{$funcionario->salario}}
                </li>
                <li>
                    <strong>Data de Pagamento: </strong> {{ $funcionario->data_pagamento }}
                </li>
                <li>
                    <strong>Descontos: </strong> {{ $funcionario->descontos }}
                </li>
                <li>
                    <strong>Observações: </strong> {{$funcionario->observacoes}}
                </li>
            </ul>
            @include('pages.includes.alerts')
            <form action="{{ route('funcionarios.destroy', $funcionario->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i> DELETAR {{ $funcionario->nome }}</button>
            </form>
        </div>
    </div>

@stop
