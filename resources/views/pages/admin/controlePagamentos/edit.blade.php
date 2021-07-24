@extends('adminlte::page')

@extends('templates.template')

@section('title', "Editar Controle Pagamento {$controlePagamento->status}")

@section('content_header')
    <h1>Dashboard</h1>
    <hr>
@stop


@section('content')
    <h1>Editar Controle Pagamento  {{$controlePagamento->status}}</h1>

    <div class="card">
        <div class="card-body">
            <form action="{{ route('controlePagamentos.update', $controlePagamento->id) }}" class="form" method="POST">
                @csrf
                @method('PUT')

                @include('pages.admin.controlePagamentos._partials.form')
            </form>
        </div>
    </div>
@stop
