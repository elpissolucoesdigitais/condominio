@extends('adminlte::page')

@extends('templates.template')

@section('title', 'Permissões disponíveis do perfil {{$profile->name}}')

@section('content_header')
    <h1>Dashboard</h1>
    <hr>
@stop

@section('content')

    <h1 class="text-align-center">Permissões disponíveis do perfil {{$profile->nome}}</h1>

    <div class="card">

        <div class="card-body">
            <table class="table table-condensed">
                <thead>
                    <tr>
                        <th width="50px">#</th>
                        <th>Nome</th>
                    </tr>
                </thead>
                <tbody>
                    <form action="{{route('profiles.permissions.attach',$profile->id)}}" method="post">
                        @csrf
                        @foreach ($permissions as $permission)
                            <tr>
                                <td>
                                    <input type="checkbox" name="permissions[]" value="{{$permission->id}}">
                                </td>
                                <td>{{ $permission->nome}}</td>
                            </tr>
                        @endforeach
                        <tr>
                            <td colspan="500">
                                @include('pages.includes.alerts')
                                <button type="submit" class="btn btn-success">Vincular</button>
                            </td>
                        </tr>
                    </form>
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
