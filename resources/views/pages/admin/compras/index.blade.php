@extends('adminlte::page')

@extends('templates.template')

@section('title', 'compra')

@section('content_header')
    <h1>Dashboard</h1>
    <hr>
@stop

@section('content')

    <h1 class="text-align-center">Compras <a href="{{ route('compras.create') }}" class="btn btn-dark">ADD PRODUTO</a></h1>

    <div class="card">

        <div class="card-body">
            <table class="table table-condensed">
                <thead>
                    <tr>
                        <th>Título </th>
                        <th width="190">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($compras as $compra)
                        <tr>
                            <td>{{$compra->titulo}}</td>

                            <td style="width=10px;">
                                <a href="{{ route('compras.edit', $compra->id) }}" class="btn btn-info">Editar</a>
                                <a href="{{ route('compras.show', $compra->id) }}" class="btn btn-warning">Detalhes</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="card-footer">
            @if (isset($filters))
                {!! $compras->appends($filters)->links() !!}
            @else
                {!! $compras->links() !!}
            @endif
        </div>
    </div>
@stop




