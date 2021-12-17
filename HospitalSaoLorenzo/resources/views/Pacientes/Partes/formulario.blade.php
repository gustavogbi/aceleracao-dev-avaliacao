@if ($errors->any())
    @foreach ($errors->all() as $error)
        <p style="color: red;">{{ $error }}</p>
    @endforeach
@endif
@csrf
<div class="form-group row">
    <div class="col-sm-5 mb-3 mb-sm-0">
        Nome:
        <input type="text" class="form-control form-control-user" name="nome"
            value="{{ $paciente->nome ?? old('nome') }}" placeholder="Nome">
    </div>
    <div class="col-sm-5">
        Sobrenome:
        <input type="text" class="form-control form-control-user" name="sobrenome"
            value="{{ $paciente->sobrenome ?? old('sobrenome') }}" placeholder="Sobrenome">
    </div>
    <div class="col-sm-2">
        Idade:
        <input type="number" class="form-control form-control-user" name="idade"
            value="{{ $paciente->idade ?? old('idade') }}" placeholder="Idade">
    </div>
</div>

<div class="form-group row">
    <div class="col-sm-6 mb-3 mb-sm-0">
        E-mail:
        <input type="email" class="form-control form-control-user" name="email"
            value="{{ $paciente->email ?? old('email') }}" placeholder="E-mail">
    </div>
    <div class="col-sm-6">
        Telefone:
        <input type="tel" class="form-control form-control-user" name="telefone"
            value="{{ $paciente->telefone ?? old('telefone') }}" placeholder="Telefone">
    </div>
</div>

<div class="form-group row">
    <div class="col-sm-12 mb-3 mb-sm-0">
        Endereço:
        <input type="text" class="form-control form-control-user" name="endereco"
            value="{{ $paciente->endereco ?? old('endereco') }}" placeholder="Endereço">
    </div>
</div>

<div class="form-group row">
    <div class="col-sm-4">
        Doador:
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
