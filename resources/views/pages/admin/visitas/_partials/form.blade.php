@include('pages.includes.alerts')

<div class="form-row">
    <div class="form-group col-md-6">
        <div class="form-group">
            <label>Nome </label>
            <input type="text" name="nome" class="form-control" value="{{ $visita->nome ?? old('nome') }}">
        </div>
    </div>
    <div class="form-group col-md-3">
        <div class="form-group">
            <label>RG </label>
            <input type="text" name="rg" class="form-control" value="{{ $visita->rg ?? old('rg') }}">
        </div>
    </div>
    <div class="form-group col-md-3">
        <div class="form-group">
            <label>CPF </label>
            <input type="text" name="cpf" class="form-control" value="{{ $visita->cpf ?? old('cpf') }}">
        </div>
    </div>
</div>

<div class="form-row">
    <div class="form-group col-md-3">
        <div class="form-group">
            <label>Data De Entrada: </label>
            <input type="date" name="data_entrada" class="form-control" value="{{ $visita->data_entrada ?? old('data_entrada') }}">
        </div>
    </div>

    <div class="form-group col-md-3">
        <div class="form-group">
            <label>Data Saida:</label>
            <input type="date" name="data_saida" class="form-control" value="{{ $visita->data_saida ?? old('data_saida') }}">
        </div>
    </div>

    <div class="form-group col-md-6">
        <div class="dropdown">
            <label>Morador</label>
            <div class="form-group">
                <select class="btn btn-success dropdown-toggle" name="morador_id" id="inputbloco_id">
                    <option value="">Morador</option>
                        @foreach ($moradores as $morador)
                        <option name="{{$morador->id}}" value="{{$morador->id}}">
                            Morador - {{$morador->nome}}
                        </option>
                        @endforeach
                </select>
            </div>
        </div>
    </div>
<br>

<br>

<div class="form-group">
    <button type="submit" class="btn btn-dark">Enviar</button>
</div>
