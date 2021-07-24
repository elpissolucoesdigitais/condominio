@extends('adminlte::page')

@extends('templates.template')

@section('title', 'vagas')

@section('content_header')
    <h1>Dashboard</h1>
    <hr>
@stop

@section('content')

    <h1 class="text-align-center">Vaga<a href="{{ route('vagas.create') }}" class="btn btn-dark">ADD</a></h1>

    <div class="card">

        <div class="card-body">
            <table class="table table-condensed">
                <thead>
                    <tr>
                        <th>Numero</th>
                        <th>Bloco</th>
                        <th width="190">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($vagas as $vaga)
                        <tr>
                            <td>{{ $vaga->numero }}</td>
                            <td>A-50</td>
                            <td style="width=10px;">
                                <a href="{{ route('vagas.edit', $vaga->id) }}" class="btn btn-info">Editar</a>
                                <a href="{{ route('vagas.show', $vaga->id) }}" class="btn btn-warning">Detalhes</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="card-footer">
            @if (isset($filters))
                {!! $vagas->appends($filters)->links() !!}
            @else
                {!! $vagas->links() !!}
            @endif
        </div>
    </div>
@stop
