@csrf
Numero de aulas:
<input type="number" name="num_aula" id="num_aula" value="{{ $cad->num_aula ?? old('num_aula') }}"
    class="form-control">
<br>
Tema:
<input type="text" name="tema" id="tema" value="{{ $cad->tema ?? old('tema') }}" class="form-control">
<br>
Duração:
<input type="text" name="duracao" id="duracao" value="{{ $cad->duracao ?? old('duracao') }}"
    class="form-control">
<br>
Observação:
<input type="text" name="observacao" id="observacao" value="{{ $cad->observacao ?? old('observacao') }}"
    class="form-control">
<br>
ID Curso:
<input type="number" name="idcurso" id="idcurso" value="{{ $cad->idcurso ?? old('idcurso') }}"
    class="form-control">
<br>
ID Professor:
<input type="number" name="idprofessor" id="idprofessor" value="{{ $cad->idprofessor ?? old('idprofessor') }}"
    class="form-control">
<br>
<button type="subbmit" class="btn btn-primary addCompany">Salvar</button>
