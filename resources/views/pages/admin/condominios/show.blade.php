@extends('adminlte::page')

@extends('templates.template')

@section('title', "Detalhes do condominio {$condominio->nome}")

@section('content_header')
    <h1>Dashboard</h1>
    <hr>
@stop

@section('content')

    <h1>Detalhes do condominio {{$condominio->nome}}</h1>

    <div class="card">
        <div class="card-body">
            <ul>
                <li>
                    <strong>Identificador do condominio: </strong> {{ $condominio->id }}
                </li>
                <li>
                    <strong>Nome: </strong> {{$condominio->nome }}
                </li>
                <li>
                    <strong>Data de Nascimento:</strong> {{$condominio->data_nascimento}}
                </li>
                <li>
                    <strong>CPF:</strong> {{ $condominio->cpf }}
                </li>
                <li>
                    <strong>RG:</strong> {{ $condominio->rg }}
                </li>
                <li>
                    <strong>Logradouro: </strong> {{ $condominio->logradouro }}
                </li>
                <li>
                    <strong>Bairro: </strong> {{$condominio->bairro }}
                </li>
                <li>
                    <strong>Cidade: </strong> {{ $condominio->cidade }}
                </li>
                <li>
                    <strong>UF: </strong> {{ $condominio->uf }}
                </li>
                <li>
                    <strong>CEP: </strong> {{$condominio->cep}}
                </li>

                <li>
                    <strong>Telefone Celular: </strong> {{ $condominio->numero_celular }}
                </li>
                <li>
                    <strong>Email: </strong> {{$condominio->email}}
                </li>

            </ul>
            @include('pages.includes.alerts')
            <form action="{{ route('condominios.destroy', $condominio->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i> DELETAR {{ $condominio->nome }}</button>
            </form>
        </div>
    </div>

@stop
