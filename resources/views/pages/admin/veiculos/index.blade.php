@extends('adminlte::page')

@extends('templates.template')

@section('title', 'veiculos')

@section('content_header')
    <h1>Dashboard</h1>
    <hr>
@stop

@section('content')

    <h1 class="text-align-center">Veiculo<a href="{{ route('veiculos.create') }}" class="btn btn-dark">ADD</a></h1>

    <div class="card">

        <div class="card-body">
            <table class="table table-condensed">
                <thead>
                    <tr>
                        <th>Ano</th>
                        <th>Modelo</th>
                        <th>Placa</th>
                        <th>Criação Reserva</th>
                        <th width="190">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($veiculos as $veiculo)
                        <tr>
                            <td>{{ $veiculo->ano }}</td>
                            <td>{{ $veiculo->modelo }}</td>
                            <td>{{ $veiculo->placa }}</td>
                            <td>{{ $veiculo->created_at}}</td>
                            <td style="width=10px;">
                                <a href="{{ route('veiculos.edit', $veiculo->id) }}" class="btn btn-info">Editar</a>
                                <a href="{{ route('veiculos.show', $veiculo->id) }}" class="btn btn-warning">Detalhes</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="card-footer">
            @if (isset($filters))
                {!! $veiculos->appends($filters)->links() !!}
            @else
                {!! $veiculos->links() !!}
            @endif
        </div>
    </div>
@stop
