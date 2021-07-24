@extends('adminlte::page')

@extends('templates.template')

@section('title', 'visitas')

@section('content_header')
    <h1>Dashboard</h1>
    <hr>
@stop

@section('content')

    <h1 class="text-align-center">Visitas <a href="{{ route('visitas.create') }}" class="btn btn-dark">ADD</a></h1>

    <div class="card">

        <div class="card-body">
            <table class="table table-condensed">
                <thead>
                    <tr>
                        <th>Nome</th>

                        <th width="190">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($visitas as $visita)
                        <tr>
                            <td>{{ $visita->nome }}</td>

                            <td style="width=10px;">
                                <a href="{{ route('visitas.edit', $visita->id) }}" class="btn btn-info">Editar</a>
                                <a href="{{ route('visitas.show', $visita->id) }}" class="btn btn-warning">Detalhes</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="card-footer">
            @if (isset($filters))
                {!! $visitas->appends($filters)->links() !!}
            @else
                {!! $visitas->links() !!}
            @endif
        </div>
    </div>
@stop
