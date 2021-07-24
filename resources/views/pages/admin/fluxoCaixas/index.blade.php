@extends('adminlte::page')

@extends('templates.template')

@section('title', 'fluxoCaixas')

@section('content_header')
    <h1>Dashboard</h1>
    <hr>
@stop

@section('content')

    <h1 class="text-align-center">Fluxo Caixas<a href="{{ route('fluxoCaixas.create') }}" class="btn btn-dark">ADD</a></h1>

    <div class="card">

        <div class="card-body">
            <table class="table table-condensed">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Descrição</th>

                        <th width="190">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($fluxoCaixas as $fluxoCaixa)
                        <tr>
                            <td>{{ $fluxoCaixa->nome }}</td>
                            <td>{{ $fluxoCaixa->descricao}}</td>
                            <td style="width=10px;">
                                <a href="{{ route('fluxoCaixas.edit', $fluxoCaixa->id) }}" class="btn btn-info">Editar</a>
                                <a href="{{ route('fluxoCaixas.show', $fluxoCaixa->id) }}" class="btn btn-warning">Detalhes</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        
        <div class="card-footer">
            @if (isset($filters))
                {!! $fluxoCaixas->appends($filters)->links() !!}
            @else
                {!! $fluxoCaixas->links() !!}
            @endif
        </div>
    </div>
@stop
