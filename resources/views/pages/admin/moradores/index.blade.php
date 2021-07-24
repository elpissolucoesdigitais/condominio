@extends('adminlte::page')

@extends('templates.template')

@section('title', 'moradores')

@section('content_header')
    <h1>Dashboard</h1>
    <hr>
@stop

@section('content')

    <h1 class="text-align-center">Morador <a href="{{ route('moradores.create') }}" class="btn btn-dark">ADD</a></h1>

    <div class="card">

        <div class="card-body">
            <table class="table table-condensed">
                <thead>
                    <tr>
                        {{--<th>Nome</th>--}}
                        <th>Nome</th>

                        <th>Celular</th>
                        <th>Morador Ativo</th>

                        <th width="190">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($moradores as $morador)
                        <tr>
                            {{--<td>{{ $morador->nome }}</td>--}}
                            <td>{{ $morador->nome}}</td>

                            <td>{{ $morador->celular}}</td>
                            <td>{{ $morador->morador_ativo}}</td>

                            <td style="width=10px;">
                                <a href="{{ route('moradores.edit', $morador->id) }}" class="btn btn-info">Editar</a>
                                <a href="{{ route('moradores.show', $morador->id) }}" class="btn btn-warning">Detalhes</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="card-footer">
            @if (isset($filters))
                {!! $moradores->appends($filters)->links() !!}
            @else
                {!! $moradores->links() !!}
            @endif
        </div>
    </div>
@stop
