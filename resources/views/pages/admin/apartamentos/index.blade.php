@extends('adminlte::page')

@extends('templates.template')

@section('title', 'apartamento')

@section('content_header')
    <h1>Dashboard</h1>
    <hr>
@stop

@section('content')

    <h1 class="text-align-center">apartamento<a href="{{ route('apartamentos.create') }}" class="btn btn-dark">ADD</a></h1>
    <div class="card">

        <div class="card-body">
            <table class="table table-condensed">
                <thead>
                    <tr>
                        {{--<th>Nome</th>--}}
                        <th>Numero</th>
                        <th>Andar</th>
                        <th>Valor</th>

                        <th width="190">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($apartamentos as $apartamento)
                        <tr>
                            {{--<td>{{ $apartamento->nome }}</td>--}}
                            <td>{{ $apartamento->numero}}</td>
                            <td>{{ $apartamento->andar}}</td>
                            <td>{{ $apartamento->valor}}</td>
                            <td style="width=10px;">
                                <a href="{{ route('apartamentos.edit', $apartamento->id) }}" class="btn btn-info">Editar</a>
                                <a href="{{ route('apartamentos.show', $apartamento->id) }}" class="btn btn-warning">Detalhes</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="card-footer">
            @if (isset($filters))
                {!! $apartamentos->appends($filters)->links() !!}
            @else
                {!! $apartamentos->links() !!}
            @endif
        </div>
    </div>
@stop
