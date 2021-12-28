@csrf
Curso:
<input type="text" name="nomedocurso" id="nomedocurso" value="{{ $cad->nomedocurso ?? old('nomedocurso') }}"
    class="form-control">
<br>
Quant. Max.:
<input type="text" name="qntmax" id="qntmax" value="{{ $cad->qntmax ?? old('qntmax') }}" class="form-control">
<br>
Descrição:
<input type="text" name="descricao" id="descricao" value="{{ $cad->descricao ?? old('descricao') }}"
    class="form-control">
<br>
Categoria:
<input type="text" name="categoria" id="categoria" value="{{ $cad->categoria ?? old('categoria') }}"
    class="form-control">
<br>
Mensalidade:
<input type="text" name="mensalidade" id="mensalidade" value="{{ $cad->mensalidade ?? old('mensalidade') }}"
    class="form-control">
<br>
Status:
<input type="text" name="status" id="status" value="{{ $cad->status ?? old('status') }}" class="form-control">
<br>
<button type="subbmit" class="btn btn-primary addCompany">Salvar</button>
