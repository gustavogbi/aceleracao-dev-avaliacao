@csrf
<div class="form-group row">
    <div class="col-sm-5 mb-3 mb-sm-0">
        <input type="text" class="form-control form-control-user" name="nome" value="{{ $paciente->nome ?? $paciente->nome }}" 
            placeholder="Nome">
    </div>
    <div class="col-sm-5">
        <input type="text" class="form-control form-control-user" name="sobrenome" value="{{ $paciente->sobrenome ?? $paciente->sobrenome }}"
            placeholder="Sobrenome">
    </div>
    <div class="col-sm-2">
        <input type="number" class="form-control form-control-user" name="idade" value="{{ $paciente->idade ?? $paciente->idade }}"
            placeholder="Idade">
    </div>
</div>

<div class="form-group row">
    <div class="col-sm-6 mb-3 mb-sm-0">
        <input type="text" class="form-control form-control-user" name="endereco" value="{{ $paciente->endereco ?? $paciente->endereco }}" 
            placeholder="Endereço">
    </div>
    <div class="col-sm-6">
        <input type="tel" class="form-control form-control-user" name="telefone" value="{{ $paciente->telefone ?? $paciente->telefone }}"
            placeholder="Telefone">
    </div>
</div>

<div class="form-group row">
    <div class="col-sm-8 mb-3 mb-sm-0">
        <input type="email" class="form-control form-control-user" name="email" value="{{ $paciente->email ?? $paciente->email }}" 
            placeholder="E-mail">
    </div>
    <div class="col-sm-1">
    É doador?
        <br>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="is_doador" value="0"
                {{ !empty($paciente) && !$paciente->is_doador ? 'checked' : '' }}>
            <label class="form-check-label">Não</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="is_doador" value="1"
                {{ !empty($paciente) && $paciente->is_doador ? 'checked' : '' }}>
            <label class="form-check-label">Sim</label>
        </div>
    </div>
</div>

<button type="submit" class="btn btn-primary btn-user btn-block">
   Confirmar
</button>