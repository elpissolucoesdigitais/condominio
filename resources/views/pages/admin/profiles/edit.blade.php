@extends('adminlte::page')

@extends('templates.template')

@section('title', "Editar o perfil {$profile->nome}")

@section('content_header')
    <h1>Dashboard</h1>
    <hr>
@stop

@section('content')
    <h1>Editar o perfil {{$profile->nome}}</h1>

    <div class="card">
        <div class="card-body">
            <form action="{{ route('profiles.update', $profile->id) }}" class="form" method="POST">
                @csrf
                @method('PUT')

                @include('pages.admin.profiles._partials.form')
            </form>
        </div>
    </div>
@stop
