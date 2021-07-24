@extends('adminlte::page')

@extends('templates.template')

@section('title', 'proprietario')

@section('content_header')
    <h1>Dashboard</h1>
    <hr>
@stop

@section('content')

    <h1 class="text-align-center">Proprietario <a href="{{ route('proprietarios.create') }}" class="btn btn-dark">ADD</a></h1>

    <div class="card">

        <div class="card-body">
            <table class="table table-condensed">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Numero Telefone</th>
                        <th>Email</th>
                        <th width="190">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($proprietarios as $proprietario)
                        <tr>
                            {{--<td>{{ $morador->nome }}</td>--}}
                            <td>{{ $proprietario->nome}}</td>
                            <td>{{ $proprietario->numero_celular}}</td>
                            <td>{{ $proprietario->email}}</td>
                            <td style="width=10px;">
                                <a href="{{ route('proprietarios.edit', $proprietario->id) }}" class="btn btn-info">Editar</a>
                                <a href="{{ route('proprietarios.show', $proprietario->id) }}" class="btn btn-warning">Detalhes</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="card-footer">
            @if (isset($filters))
                {!! $proprietarios->appends($filters)->links() !!}
            @else
                {!! $proprietarios->links() !!}
            @endif
        </div>
    </div>
@stop




