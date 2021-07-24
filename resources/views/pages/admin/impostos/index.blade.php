@extends('adminlte::page')

@extends('templates.template')

@section('title', 'imposto')

@section('content_header')
    <h1>Dashboard</h1>
    <hr>
@stop

@section('content')

    <h1 class="text-align-center">Imposto <a href="{{ route('impostos.create') }}" class="btn btn-dark">ADD</a></h1>

    <div class="card">

        <div class="card-body">
            <table class="table table-condensed">
                <thead>
                    <tr>
                        <th>Descrição: </th>
                        <th width="190">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($impostos as $imposto)
                        <tr>
                            {{--<td>{{ $morador->nome }}</td>--}}
                            <td>{{ $imposto->descricao}}</td>
                            <td style="width=10px;">
                                <a href="{{ route('impostos.edit', $imposto->id) }}" class="btn btn-info">Editar</a>
                                <a href="{{ route('impostos.show', $imposto->id) }}" class="btn btn-warning">Detalhes</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="card-footer">
            @if (isset($filters))
                {!! $impostos->appends($filters)->links() !!}
            @else
                {!! $impostos->links() !!}
            @endif
        </div>
    </div>
@stop




