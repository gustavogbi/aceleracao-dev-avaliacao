@csrf
<div class="form-group row">
    <div class="col-sm-5 mb-3 mb-sm-0">
        <input type="text" class="form-control form-control-user" name="nome" value="{{ $bancodesangue->tipo ?? old('nome')}}" 
            placeholder="Nome">
    </div>
    <div class="col-sm-5">
        <input type="text" class="form-control form-control-user" name="sobrenome" value="{{ $bancodesangue->contabilidade ?? old('sobrenome')}}"
            placeholder="Sobrenome">
    </div>
    <div class="col-sm-2">
        <input type="number" class="form-control form-control-user" name="idade" value="{{ $bancodesangue->contabilidade ?? old('idade')}}"
            placeholder="Idade">
    </div>
</div>

<div class="form-group row">
    <div class="col-sm-6 mb-3 mb-sm-0">
        <input type="text" class="form-control form-control-user" name="endereco" value="{{ $bancodesangue->cidade ?? old('cidade')}}" 
            placeholder="Endereço">
    </div>
    <div class="col-sm-6">
        <input type="tel" class="form-control form-control-user" name="telefone" value="{{ $bancodesangue->telefone ?? old('telefone')}}"
            placeholder="Telefone">
    </div>
</div>

<div class="form-group row">
    <div class="col-sm-8 mb-3 mb-sm-0">
        <input type="email" class="form-control form-control-user" name="email" value="{{ $bancodesangue->email ?? old('email')}}" 
            placeholder="E-mail">
    </div>
    <div class="col-sm-1">
        <input type="checkbox" class="form-control" name="is_doador" value="true">
    </div>
    <div class="col-sm-3">
        <p class="form-control form-control-user">É doador?</p>
    </div>
</div>

<button type="submit" class="btn btn-primary btn-user btn-block">
   Confirmar
</button>