@extends('adminlte::page')

@extends('templates.template')

@section('title', 'Perfis')

@section('content_header')
    <h1>Dashboard</h1>
    <hr>
@stop

@section('content')

    <h1 class="text-align-center">Perfil <a href="{{ route('profiles.create') }}" class="btn btn-dark">ADD</a></h1>

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
                    @foreach ($profiles as $profile)
                        <tr>
                            {{--<td>{{ $perfi->nome }}</td>--}}
                            <td>{{ $profile->nome}}</td>

                            <td style="width=10px;">
                                <a href="{{ route('profiles.edit', $profile->id) }}" class="btn btn-info">Editar</a>
                                <a href="{{ route('profiles.show', $profile->id) }}" class="btn btn-warning">Detalhes</a>
                                <a href="{{ route('profile.permissions', $profile->id) }}" class="btn btn-warning">Permissão</a>
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
