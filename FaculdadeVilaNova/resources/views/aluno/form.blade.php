 @csrf
  Nome:
         <input type="text" nome="nome" id="nome"  value="{{ $cad->nome ?? old ('nome')}}" class="form-control">
       <br>
         <button type="subbmit" class="btn btn-primary addCompany">Salvar</button>