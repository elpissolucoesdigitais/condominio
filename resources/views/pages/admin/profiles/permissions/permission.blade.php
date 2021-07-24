@extends('adminlte::page')

@extends('templates.template')

@section('title', 'Permissões do perfil {{$profile->name}}')

@section('content_header')
    <h1>Dashboard</h1>
    <hr>
@stop

@section('content')

    <h1 class="text-align-center">Permissões do perfil {{$profile->nome}} <a href="{{ route('profiles.permissions.available',$profile->id) }}" class="btn btn-dark">ADD nova permissão</a></h1>

    <div class="card">

        <div class="card-body">
            <table class="table table-condensed">
                <thead>
                    <tr>
                        {{--<th>Nome</th>--}}
                        <th>Nome</th>

                        <th width="50">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($permissions as $permission)
                        <tr>
                            {{--<td>{{ $perfi->nome }}</td>--}}
                            <td>{{ $permission->nome}}</td>

                            <td style="width=10px;">
                                <a href="{{ route('profiles.permissions.detach', [$profile->id, $permission->id]) }}" class="btn btn-danger">Desvincular</a>

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
