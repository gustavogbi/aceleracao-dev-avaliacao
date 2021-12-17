@if ($errors->any())
    @foreach ($errors->all() as $error)
        <p style="color: red;">{{ $error }}</p>
    @endforeach
@endif
@csrf
<div class="form-group row">
    <div class="col-sm-6 mb-3 mb-sm-0">
        Nome:
        <input type="text" class="form-control form-control-user" value="{{ $doacao->nome ?? old('nome') }}"
            name="nome" placeholder="Nome">
    </div>
    <div class="col-sm-6">
        Telefone:
        <input type="text" class="form-control form-control-user" value="{{ $doacao->telefone ?? old('telefone') }}"
            name="telefone" placeholder="Telefone">
    </div>
</div>

<div class="form-group row">
    <div class="col-sm-6 mb-3 mb-sm-0">
        Email:
        <input type="text" class="form-control form-control-user" value="{{ $doacao->email ?? old('email') }}"
            name="email" placeholder="E-mail">
    </div>
    <div class="col-sm-6">
        Quantidade de litros:
        <input type="text" class="form-control form-control-user"
            value="{{ $doacao->qtd_litros ?? old('qtd_litros') }}" name="qtd_litros"
            placeholder="Quantidade de litros">
    </div>
</div>
<button type="submit" class="btn btn-primary btn-user btn-block">
    Salvar
</button>
