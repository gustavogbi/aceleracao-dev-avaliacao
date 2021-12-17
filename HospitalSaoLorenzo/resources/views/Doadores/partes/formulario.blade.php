@if ($errors->any())
    @foreach ($errors->all() as $error)
        <p style="color: red;">{{ $error }}</p>
    @endforeach
@endif
@csrf
<div class="form-group row">
    <div class="col-sm-6 mb-3 mb-sm-0">
        Nome:
        <input type="text" class="form-control form-control-user" value="{{ $doador->nome ?? old('nome') }}"
            name="nome" placeholder="Nome">
    </div>
    <div class="col-sm-6">
        Telefone:
        <input type="text" class="form-control form-control-user" value="{{ $doador->telefone ?? old('telefone') }}"
            name="telefone" placeholder="Telefone">
    </div>
</div>

<div class="form-group row">
    <div class="col-sm-6 mb-3 mb-sm-0">
        Email:
        <input type="text" class="form-control form-control-user" value="{{ $doador->email ?? old('email') }}"
            name="email" placeholder="E-mail">
    </div>
    <div class="col-sm-6">
        Peso:
        <input type="text" class="form-control form-control-user" value="{{ $doador->peso ?? old('peso') }}"
            name="peso" placeholder="Peso">
    </div>
</div>

<div class="form-group row">
    <div class="col-sm-6 mb-3 mb-sm-0">
        Altura:
        <input type="text" class="form-control form-control-user" value="{{ $doador->altura ?? old('altura') }}"
            name="altura" placeholder="Altura">
    </div>
    <div class="col-sm-6"> Observações:
        <input type="text" class="form-control form-control-user"
            value="{{ $doador->observacoes ?? old('observacoes') }}" name="observacoes" placeholder="Observações">

    </div>
</div>

<div class="form-group row">
    <div class="col-sm-6 mb-3 mb-sm-0">
        Doenças:
        <br>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="doencas" value="0"
                {{ !empty($doador) && !$doador->doencas ? 'checked' : '' }}>
            <label class="form-check-label">Não</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="doencas" value="1"
                {{ !empty($doador) && $doador->doencas ? 'checked' : '' }}>
            <label class="form-check-label">Sim</label>
        </div>
    </div>
    <div class="col-sm-6">
        Fumante:
        <br>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="fumante" value="0"
                {{ !empty($doador) && !$doador->fumante ? 'checked' : '' }}>
            <label class="form-check-label">Não</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="fumante" value="1"
                {{ !empty($doador) && $doador->fumante ? 'checked' : '' }}>
            <label class="form-check-label">Sim</label>
        </div>
        
    </div>
</div>
<button type="submit" class="btn btn-primary btn-user btn-block">
    Salvar
</button>
