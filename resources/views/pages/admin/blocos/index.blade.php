@extends('adminlte::page')

@extends('templates.template')

@section('title', 'blocos')

@section('content_header')
    <h1>Dashboard</h1>
    <hr>
@stop

@section('content')

    <h1 class="text-align-center">Bloco

        <a href="{{ route('blocos.create') }}" class="btn btn-dark">ADD</a>

    </h1>

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
                    @foreach ($blocos as $bloco)
                        <tr>
                            <td>{{ $bloco->nome }}</td>

                            <td style="width=10px;">
                                @can('user_create')
                                <a href="{{ route('blocos.edit', $bloco->id) }}" class="btn btn-info">Editar</a>
                                @endcan
                                <a href="{{ route('blocos.show', $bloco->id) }}" class="btn btn-warning">Detalhes</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="card-footer">
            @if (isset($filters))
                {!! $blocos->appends($filters)->links() !!}
            @else
                {!! $blocos->links() !!}
            @endif
        </div>
    </div>
@stop
