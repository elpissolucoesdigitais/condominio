@extends('adminlte::page')

@extends('templates.template')

@section('title', "Detalhes do Item Para Reserva {$reservaItem->nome}")

@section('content_header')
    <h1>Dashboard</h1>
    <hr>
@stop

@section('content')
    <h1>Detalhes da Reserva Item {{$reservaItem->nome}}</b></h1>

    <div class="card">
        <div class="card-body">
            <ul>
                <li>
                    <strong>Identificador da Reserva Item: </strong> {{ $reservaItem->id }}
                </li>
                <li>
                    <strong>Nome: </strong> {{ $reservaItem->nome }}
                </li>

                <li>
                    <strong>Identificador Do Item: </strong> {{  $reservaItem->identificador_item}}
                </li>

                <li>
                    <strong>Quantidade: </strong> {{  $reservaItem->quantidade}}
                </li>

                <li>
                    <strong>Valor: </strong> {{  $reservaItem->valor}}
                </li>

            </ul>

            @include('pages.includes.alerts')

            <form action="{{ route('reservaItems.destroy', $reservaItem->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i> DELETAR reservaItem{{ $reservaItem->titulo }}</button>
            </form>
        </div>
    </div>
@stop
