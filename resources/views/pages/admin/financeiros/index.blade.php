@extends('adminlte::page')

@extends('templates.template')

@section('title', 'gastos')

@section('content_header')
    <h1>Dashboard</h1>
    <hr>
@stop

@section('content')
    <h1 class="text-align-center">Financeiro<a href="{{ route('financeiros.create') }}" class="btn btn-dark">ADD</a></h1>

    <div class="card">

        <div class="card-body">
            <table class="table table-condensed">
                <thead>
                    <tr>
                        {{--<th>Nome</th>--}}

                        <th>Data Financeiro</th>

                        <th width="190">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($financeiros as $financeiro)
                        <tr>
                            {{--<td>{{ $financeiro->nome }}</td>--}}

                            <td>{{ $financeiro->data_financeiro}}</td>
                            
                            <td style="width=10px;">
                                <a href="{{ route('financeiros.edit', $financeiro->id) }}" class="btn btn-info">Editar</a>
                                <a href="{{ route('financeiros.show', $financeiro->id) }}" class="btn btn-warning">Detalhes</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="card-footer">
            @if (isset($filters))
                {!! $financeiros->appends($filters)->links() !!}
            @else
                {!! $financeiros->links() !!}
            @endif
        </div>
    </div>
@stop
