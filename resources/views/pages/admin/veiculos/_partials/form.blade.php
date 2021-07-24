@include('pages.includes.alerts')

<div class="form-row">
    <div class="form-group col-md-2">
        <div class="form-group">
            <label>Ano</label>
            <input type="number" name="ano" class="form-control" value="{{ $veiculo->ano ?? old('ano') }}">
        </div>
    </div>
    <div class="form-group col-md-2">
        <div class="form-group">
            <label>Modelo</label>
            <input type="text" name="modelo" class="form-control" value="{{ $veiculo->modelo ?? old('modelo') }}">
        </div>
    </div>

    <div class="form-group col-md-2">
        <div class="form-group">
            <label>Placa</label>
            <input type="text" name="placa" class="form-control" value="{{ $veiculo->placa ?? old('placa') }}">
        </div>
    </div>

    <div class="form-group col-md-4">
        <label>Morador</label>
        <div class="form-group">
            <div class="dropdown">
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

    <div class="form-group col-md-1">
        <label>Vaga</label>
        <div class="form-group">
            <div class="dropdown">
                <select class="btn btn-success dropdown-toggle" name="vaga_id" id="inputbloco_id">
                    <option value="">Vaga</option>
                        @foreach ($vagas as $vaga)
                        <option name="{{$vaga->id}}" value="{{$vaga->id}}">
                            Vaga - {{$vaga->numero}}
                        </option>
                        @endforeach
                </select>
            </div>
        </div>
    </div>
</div>

<div class="form-group">
    <button type="submit" class="btn btn-dark">Enviar</button>
</div>
