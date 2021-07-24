@extends('adminlte::page')

@extends('templates.template')

@section('title', "Detalhes do proprietario {$proprietario->nome}")

@section('content_header')
    <h1>Dashboard</h1>
    <hr>
@stop

@section('content')

    <h1>Detalhes do Proprietário {{$proprietario->nome}}</h1>

    <div class="card">
        <div class="card-body">
            <ul>
                <li>
                    <strong>Identificador do proprietario: </strong> {{ $proprietario->id }}
                </li>
                <li>
                    <strong>Nome: </strong> {{$proprietario->nome }}
                </li>
                <li>
                    <strong>Data de Nascimento:</strong> {{$proprietario->data_nascimento}}
                </li>
                <li>
                    <strong>CPF:</strong> {{ $proprietario->cpf }}
                </li>
                <li>
                    <strong>RG:</strong> {{ $proprietario->rg }}
                </li>
                <li>
                    <strong>Logradouro: </strong> {{ $proprietario->logradouro }}
                </li>
                <li>
                    <strong>Bairro: </strong> {{$proprietario->bairro }}
                </li>
                <li>
                    <strong>Cidade: </strong> {{ $proprietario->cidade }}
                </li>
                <li>
                    <strong>UF: </strong> {{ $proprietario->uf }}
                </li>
                <li>
                    <strong>CEP: </strong> {{$proprietario->cep}}
                </li>

                <li>
                    <strong>Telefone Celular: </strong> {{ $proprietario->numero_celular }}
                </li>
                <li>
                    <strong>Email: </strong> {{$proprietario->email}}
                </li>

            </ul>
            @include('pages.includes.alerts')
            <form action="{{ route('proprietarios.destroy', $proprietario->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i> Deletar {{ $proprietario->nome }}</button>
            </form>
        </div>
    </div>

@stop
