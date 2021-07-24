@extends('adminlte::page')

@extends('templates.template')

@section('title', 'consumo')

@section('content_header')
    <h1>Dashboard</h1>
    <hr>
@stop

@section('content')

    <h1 class="text-align-center">Consumo <a href="{{ route('consumos.create') }}" class="btn btn-dark">ADD</a></h1>

    <div class="card">

        <div class="card-body">
            <table class="table table-condensed">
                <thead>
                    <tr>
                        <th>Tipo Consumo </th>
                        <th>Apartamento</th>
                        <th>Vencimento</th>
                        <th width="190">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($consumos as $consumo)
                        <tr>
                            {{--<td>{{ $morador->nome }}</td>--}}

                            <td>{{$consumo->tipo_consumo}}</td>
                            <td>
                                @foreach ($apartamentos as $apartamento)
                                    @if ($consumo->apartamento_id == $apartamento->id)
                                        {{$apartamento->numero}}
                                    @endif
                                @endforeach
                            </td>
                            <td>{{$consumo->vencimento}}</td>
                            <td style="width=10px;">
                                <a href="{{ route('consumos.edit', $consumo->id) }}" class="btn btn-info">Editar</a>
                                <a href="{{ route('consumos.show', $consumo->id) }}" class="btn btn-warning">Detalhes</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="card-footer">
            @if (isset($filters))
                {!! $consumos->appends($filters)->links() !!}
            @else
                {!! $consumos->links() !!}
            @endif
        </div>
    </div>
@stop




