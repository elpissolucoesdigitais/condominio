@extends('adminlte::page')

@extends('templates.template')

@section('title', 'Perfis da permissão {{$permission->nome}}')

@section('content_header')
    <h1>Dashboard</h1>
    <hr>
@stop

@section('content')

    <h1 class="text-align-center">Perfis da permissão {{$permission->nome}}</h1>

    <div class="card">

        <div class="card-body">
            <table class="table table-condensed">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th width="50">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($profiles as $profile)
                        <tr>

                            <td>{{ $profile->nome}}</td>

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
                {!! $profiles->appends($filters)->links() !!}
            @else
                {!! $profiles->links() !!}
            @endif
        </div>
    </div>
@stop
