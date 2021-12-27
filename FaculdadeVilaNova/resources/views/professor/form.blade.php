
        @csrf

        Nome:
        <input type="text" name="nome" id="nome"  value="{{$cad->nome ?? old ('nome')}}" class="form-control">
         
        Matricula:
        <input type="number" name="matricula" id="matricula"  value="{{ $cad->matricula ?? old ('matricula')}}" class="form-control">
        
        Competencia:
         <input type="text" name="competencia" id="competencia"  value="{{ $cad->competencia ?? old ('competencia')}}" class="form-control">
         
        Escolaridade:
        
        <input type="text" name="escolaridade" id="escolaridade"  value="{{ $cad->escolaridade ?? old ('escolaridade')}}" class="form-control">
       <br>
         <button type="subbmit" class="btn btn-primary addCompany">Salvar</button>