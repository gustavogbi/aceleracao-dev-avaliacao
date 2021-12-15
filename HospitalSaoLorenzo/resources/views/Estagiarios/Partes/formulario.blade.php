@if ($errors->any())
    @foreach ($errors->all() as $error)
        <p style="color: red;">{{ $error }}</p>
    @endforeach
@endif
@csrf
<div class="form-group row">
    <div class="col-md">
        Nome:
        <input type="text" class="form-control form-control-user" value="{{ $estagiario->nome ?? old('nome') }}"
            name="nome" placeholder="Nome">
    </div>
</div>

<div class="form-group row">
    <div class="col-md">
       Gráu de escolaridade:
        <input type="text" class="form-control form-control-user" value="{{ $estagiario->grauDeEscolaridade ?? old('grauDeEscolaridade') }}"
            name="grauDeEscolaridade" placeholder="Grau de escolaridade">
    </div>

<div class="form-group row">
    <div class="col-md">
        Telefone:
        <input type="number" class="form-control form-control-user" value="{{ $estagiario->telefone ?? old('telefone') }}"
            name="telefone" placeholder="DDD + Telefone Ex: (XX) XXXX-XXXX">
    </div>
    <div class="col-md">
        e-mail: 
        <input type="text" class="form-control form-control-user" value="{{ $estagiario->email ?? old('email') }}"
            name="email" placeholder="e-mail">
    </div>
</div>

<button type="submit" class="btn btn-primary btn-user btn-block">
    Salvar
</button>
