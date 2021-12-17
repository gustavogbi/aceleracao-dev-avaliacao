@if ($errors->any())
    @foreach ($errors->all() as $error)
        <p style="color: red;">{{ $error }}</p>
    @endforeach
@endif
@csrf
<div class="form-group row">
    <div class="col-sm-6 mb-3 mb-sm-0">
        CRM:
        <input type="text" class="form-control form-control-user" value="{{ $medico->CRM ?? old('CRM') }}" name="CRM"
            placeholder="CRM">
    </div>
    <div class="col-sm-6">
        Nome:
        <input type="text" class="form-control form-control-user" value="{{ $medico->nome ?? old('nome') }}"
            name="nome" placeholder="Nome">
    </div>
</div>

<div class="form-group row">
    <div class="col-sm-6 mb-3 mb-sm-0">
        Area De Atuacao:
        <input type="text" class="form-control form-control-user"
            value="{{ $medico->areaDeAtuacao ?? old('areaDeAtuacao') }}" name="areaDeAtuacao"
            placeholder="Area De Atuacao">
    </div>
    <div class="col-sm-6">
        Idade:
        <input type="text" class="form-control form-control-user" value="{{ $medico->idade ?? old('idade') }}"
            name="idade" placeholder="Idade">
    </div>
</div>

<div class="form-group row">
    <div class="col-sm-6 mb-3 mb-sm-0">
        Telefone:
        <input type="number" class="form-control form-control-user" value="{{ $medico->telefone ?? old('telefone') }}"
            name="telefone" placeholder="DDD + Telefone Ex: (XX) XXXX-XXXX">
    </div>
    <div class="col-sm-6">
        e-mail:
        <input type="text" class="form-control form-control-user" value="{{ $medico->email ?? old('email') }}"
            name="email" placeholder="e-mail">
    </div>
</div>

<button type="submit" class="btn btn-primary btn-user btn-block">
    Salvar
</button>
