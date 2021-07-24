@extends('adminlte::page')

@extends('templates.template')

@section('title', 'condominios')

@section('content_header')
    <h1>Dashboard</h1>
    <hr>
@stop

@section('content')

    <h1 class="text-align-center">Condominio <a href="{{ route('condominios.create') }}" class="btn btn-dark">ADD</a></h1>

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
                    @foreach ($condominios as $condominio)
                        <tr>
                            {{--<td>{{ $morador->nome }}</td>--}}
                            <td>{{ $condominio->nome}}</td>
                            <td>{{ $condominio->numero_celular}}</td>
                            <td>{{ $condominio->email}}</td>
                            <td style="width=10px;">
                                <a href="{{ route('condominios.edit', $condominio->id) }}" class="btn btn-info">Editar</a>
                                <a href="{{ route('condominios.show', $condominio->id) }}" class="btn btn-warning">Detalhes</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="card-footer">
            @if (isset($filters))
                {!! $condominios->appends($filters)->links() !!}
            @else
                {!! $condominios->links() !!}
            @endif
        </div>
    </div>
@stop




