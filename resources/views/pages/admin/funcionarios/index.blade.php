@extends('adminlte::page')

@extends('templates.template')

@section('title', 'funcionarios')

@section('content_header')
    <h1>Dashboard</h1>
    <hr>
@stop

@section('content')

    <h1 class="text-align-center">Funcionários <a href="{{ route('funcionarios.create') }}" class="btn btn-dark">ADD</a></h1>

    <div class="card">

        <div class="card-body">
            <table class="table table-condensed">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Função</th>
                        <th>Numero Telefone</th>
                        <th>Email</th>
                        <th width="190">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($funcionarios as $funcionario)
                        <tr>
                            {{--<td>{{ $morador->nome }}</td>--}}
                            <td>{{ $funcionario->nome}}</td>
                            <td>{{ $funcionario->funcao}}</td>
                            <td>{{ $funcionario->fone_celular}}</td>
                            <td>{{ $funcionario->email}}</td>
                            <td style="width=10px;">
                                <a href="{{ route('funcionarios.edit', $funcionario->id) }}" class="btn btn-info">Editar</a>
                                <a href="{{ route('funcionarios.show', $funcionario->id) }}" class="btn btn-warning">Detalhes</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="card-footer">
            @if (isset($filters))
                {!! $funcionarios->appends($filters)->links() !!}
            @else
                {!! $funcionarios->links() !!}
            @endif
        </div>
    </div>
@stop




