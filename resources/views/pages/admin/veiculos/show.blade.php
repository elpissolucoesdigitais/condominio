@extends('adminlte::page')

@extends('templates.template')

@section('title', "Detalhes da Reserva {$reserva->status}")

@section('content_header')
    <h1>Dashboard</h1>
    <hr>
@stop

@section('content')
    <h1>Detalhes da reserva {{$reserva->status}}</b></h1>

    <div class="card">
        <div class="card-body">
            <ul>
                <li>
                    <strong>Identificador da reserva: </strong> {{ $reserva->id }}
                </li>
                <li>
                    <strong>Status: </strong> {{ $reserva->status }}
                </li>

                <li>
                    <strong>Data de Solicitação: </strong> {{  $reserva->data_solicitacao}}
                </li>

                <li>
                    <strong>Criado: </strong> {{  $reserva->created_at}}
                </li>
            </ul>

            @include('pages.includes.alerts')

            <form action="{{ route('reservas.destroy', $reserva->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i> DELETAR O RESERVA{{ $reserva->status }}</button>
            </form>
        </div>
    </div>
@stop
