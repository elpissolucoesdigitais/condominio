@include('pages.includes.alerts')

<div class="form-group">
    <label>Nome: </label>
    <input type="text" name="nome" class="form-control" placeholder="Nome:" value="{{ $permissao->nome ?? old('nome') }}">
</div>


<div class="form-group">
    <button type="submit" class="btn btn-dark">Enviar</button>
</div>
