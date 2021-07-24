@include('pages.includes.alerts')

<div class="form-row">
    <div class="form-group col-md-9">
        <div class="form-group">
            <label>Nome: </label>
            <input type="text" name="nome" class="form-control" placeholder="Nome:" value="{{ $morador->nome ?? old('nome') }}">
        </div>
    </div>

    <div class="form-group col-md-3">
        <div class="form-group">
            <label>Data Nascimento: </label>
            <input type="date" name="data_nascimento" class="form-control" value="{{ $morador->data_nascimento ?? old('data_nascimento') }}">
        </div>
    </div>
</div>

<div class="form-row">
    <div class="form-group col-md-6">
        <div class="form-group">
            <label>Email: </label>
            <input type="email" name="email" class="form-control" value="{{ $morador->email ?? old('email') }}">
        </div>
    </div>

    <div class="form-group col-md-3">
        <div class="form-group">
            <label>CPF</label>
            <input type="text" name="cpf" class="form-control" value="{{ $morador->cpf ?? old('cpf') }}">
        </div>
    </div>

    <div class="form-group col-md-3">
        <div class="form-group">
            <label>Celular: </label>
            <input type="number" name="celular" class="form-control" value="{{ $morador->celular ?? old('celular') }}">
        </div>
    </div>

</div>

<div class="form-row">

    <div class="form-group col-md-3">
        <div class="form-group">
            <label>RG</label>
            <input type="text" name="rg" class="form-control" value="{{ $morador->rg ?? old('rg') }}">
        </div>
    </div>

    <div class="form-group col-md-3">
        <div class="form-group">
            <label>Data De Cadastro: </label>
            <input type="date" name="data_cadastro" class="form-control" value="{{ $morador->data_cadastro ?? old('data_cadastro') }}">
        </div>
    </div>

    <div class="form-group col-md-3">
        <div class="dropdown">
            <label>Morador Ativo</label>
            <div class="form-group">
                <select class="btn btn-success dropdown-toggle" name="morador_ativo">
                    <option value="">Morador Ativo</option>
                        <option name="tipo_consumo" value="Sim">
                            Morador Ativo - Sim
                        </option>
                        <option name="tipo_consumo" value="Não">
                            Morador Ativo - Não
                        </option>
                </select>
            </div>
        </div>
    </div>

    <div class="form-group col-md-3">
        <div class="dropdown">
            <label>Apartamento</label>
                <div class="form-group">
                    <select class="btn btn-success dropdown-toggle" name="apartamento_id" id="inputbloco_id">
                        <option value="">Apartamento</option>
                            @foreach ($apartamentos as $apartamento)
                            <option name="{{$apartamento->id}}" value="{{$apartamento->id}}">
                                Apartamento - {{$apartamento->numero}}
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
