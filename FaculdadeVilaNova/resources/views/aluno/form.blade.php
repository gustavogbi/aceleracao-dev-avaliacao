@csrf
<div class="row ">
    
<input type="hidden" name="idade" id="idade" value="{{ $cad->idade ?? old ('idade')}}" class="form-control">
<div class="col-md-8">
Nome:
<input type="text" name="nome" id="nome" value="{{ $cad->nome ?? old ('nome')}}" class="form-control"><br> 
</div>

<div class="col-md-4">
  
Matricula:
<input type="text" name="matricula" id="matricula" value="{{ $cad->matricula ?? old ('matricula')}}"
    class="form-control"><br> 
</div>

<div class="col-md-4">
  
CPF:
    <input type="text" name="cpf" id="cpf" value="{{ $cad->cpf ?? old ('cpf')}}" class="form-control">
</div>

<div class="col-md-4">
Curso
    <select class="select2bs4" name="idcursos" id="idcursos" style="width: 100%;">
        @foreach($cursos as $curso)

        <option value="{{$curso->id}}" @if (!empty($cad)) {{ $cad->idcurso == $curso->id ? 'selected' : '' }} @endif>
            {{$curso->nomedocurso}}
        </option>
        @endforeach
    </select>
</div>

<div class="col-md-4">
Plano Financeiro
    <select class="select2bs4" name="idplano" id="idplano" style="width: 100%;">
        @foreach($planos as $plano)

        <option value="{{$plano->id}}" @if (!empty($cad)) {{ $cad->idplano == $plano->id ? 'selected' : '' }} @endif>
            {{$plano->nome}}
        </option>
        @endforeach
    </select>
</div>
<div class="col-md-4">
  <br>
Data de nascimento:
<input onchange="responsavel(this)" onload="responsavel(this)" type="date" name="datanascimento" id="datanascimento"
    value="{{ $cad->datanascimento ?? old ('datanascimento')}}" class="form-control"><br> 
</div>

<div class="col-md-8">
  <br>
@if(Route::is('alunos.edit'))
@if(\Carbon\Carbon::parse($cad->datanascimento)->diff(\Carbon\Carbon::now())->format('%y') < 18) 
<div id="responsavelFinanceirodiv">
    Responsável Financeiro(Para menores de 18 anos)
    <input type="text" name="responsavelFinanceiro" id="responsavelFinanceiro"
        value="{{ $cad->responsavelFinanceiro ?? old ('responsavelFinanceiro')}}" class="form-control" required><br> 
    </div>
    @endif
     @endif  
     
    <div id="responsavelFinanceirodiv" style="display:none;">
    Responsável Financeiro(Para menores de 18 anos)
    <input type="text" name="responsavelFinanceiro" id="responsavelFinanceiro"
        value="{{ $cad->responsavelFinanceiro ?? old ('responsavelFinanceiro')}}" class="form-control" ><br> 
    </div>
</div>

</div>
<br> <button type="subbmit" class="btn btn-primary addCompany">Salvar</button>


    <script>
    function responsavel(val) {
        // it will accept two types of format yyyy-mm-dd and yyyy/mm/dd
        var optimizedBirthday = val.value.replace(/-/g, "/");

        //set date based on birthday at 01:00:00 hours GMT+0100 (CET)
        var myBirthday = new Date(optimizedBirthday);

        // set current day on 01:00:00 hours GMT+0100 (CET)
        var currentDate = new Date().toJSON().slice(0, 10) + ' 01:00:00';

        // calculate age comparing current date and borthday
        var myAge = ~~((Date.now(currentDate) - myBirthday) / (31557600000));

        if (myAge > 18) {

            document.getElementById("responsavelFinanceirodiv").style.display = "none";
            document.getElementById("responsavelFinanceiro").removeAttribute("required");
            document.getElementById("responsavelFinanceiro").disabled = true;
        } else {
            document.getElementById("responsavelFinanceirodiv").style.display = "block";
            document.getElementById("responsavelFinanceiro").required = true;
            document.getElementById("responsavelFinanceiro").removeAttribute("disabled");
        }

    };
    </script>
