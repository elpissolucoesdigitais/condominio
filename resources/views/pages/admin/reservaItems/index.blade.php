@extends('adminlte::page')

@extends('templates.template')

@section('title', 'reservaItems')

@section('content_header')
    <h1>Dashboard</h1>
    <hr>
@stop

@section('content')

    <h1 class="text-align-center">Reserva Itens <a href="{{ route('reservaItems.create') }}" class="btn btn-dark">ADD ITEM OU ESPAÇO PARA RESERVA</a></h1>

    <div class="card">

        <div class="card-body">
            <table class="table table-condensed">
                <thead>
                    <tr>
                        <th>Nome </th>
                        <th width="190">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($reservaItems as $reservaItem)
                        <tr>
                            <td>{{$reservaItem->nome}}</td>

                            <td style="width=10px;">
                                <a href="{{ route('reservaItems.edit', $reservaItem->id) }}" class="btn btn-info">Editar</a>
                                <a href="{{ route('reservaItems.show', $reservaItem->id) }}" class="btn btn-warning">Detalhes</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="card-footer">
            @if (isset($filters))
                {!! $reservaItems->appends($filters)->links() !!}
            @else
                {!! $reservaItems->links() !!}
            @endif
        </div>
    </div>
@stop




