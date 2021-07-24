@extends('adminlte::page')

@extends('templates.template')

@section('title', 'controlePagamentos')

@section('content_header')
    <h1>Dashboard</h1>
    <hr>
@stop

@section('content')

    <h1 class="text-align-center">Controle Pagamento<a href="{{ route('controlePagamentos.create') }}" class="btn btn-dark">ADD</a></h1>

    <div class="card">

        <div class="card-body">
            <table class="table table-condensed">
                <thead>
                    <tr>
                        <th>Status</th>

                        <th width="190">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($controlePagamentos as $controlePagamento)
                        <tr>
                            <td>{{ $controlePagamento->status }}</td>
                            <td style="width=10px;">
                                <a href="{{ route('controlePagamentos.edit', $controlePagamento->id) }}" class="btn btn-info">Editar</a>
                                <a href="{{ route('controlePagamentos.show', $controlePagamento->id) }}" class="btn btn-warning">Detalhes</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="card-footer">
            @if (isset($filters))
                {!! $controlePagamentos->appends($filters)->links() !!}
            @else
                {!! $controlePagamentos->links() !!}
            @endif
        </div>
    </div>
@stop
