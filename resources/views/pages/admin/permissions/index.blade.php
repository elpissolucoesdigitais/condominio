@extends('adminlte::page')

@extends('templates.template')

@section('title', 'permissoes')

@section('content_header')
    <h1>Dashboard</h1>
    <hr>
@stop

@section('content')

    <h1 class="text-align-center">Permissões <a href="{{ route('permissions.create') }}" class="btn btn-dark">ADD</a></h1>

    <div class="card">

        <div class="card-body">
            <table class="table table-condensed">
                <thead>
                    <tr>
                        {{--<th>Nome</th>--}}
                        <th>Nome</th>

                        <th width="190">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($permissions as $permission)
                        <tr>
                            {{--<td>{{ $perfi->nome }}</td>--}}
                            <td>{{ $permission->nome}}</td>

                            <td style="width=10px;">
                                <a href="{{ route('permissions.edit', $permission->id) }}" class="btn btn-info">Editar</a>
                                <a href="{{ route('permissions.show', $permission->id) }}" class="btn btn-warning">Detalhes</a>
                                <a href="{{ route('permissions.profile', $permission->id) }}" class="btn btn-warning">Ver</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="card-footer">
            @if (isset($filters))
                {!! $permissions->appends($filters)->links() !!}
            @else
                {!! $permissions->links() !!}
            @endif
        </div>
    </div>
@stop
