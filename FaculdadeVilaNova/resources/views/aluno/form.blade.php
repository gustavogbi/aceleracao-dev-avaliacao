

@csrf
  Nome:
         <input type="text" name="nome" id="nome"  value="{{ $cad->nome ?? old ('nome')}}" class="form-control">
       <br>
  Matricula:
         <input type="text" name="matricula" id="matricula"  value="{{ $cad->matricula ?? old ('matricula')}}" class="form-control">
       <br>
  Data de nascimento:
         <input onchange="responsavel(this)" onload="responsavel(this)"  type="date" name="datanascimento" id="datanascimento"  value="{{ $cad->datanascimento ?? old ('datanascimento')}}" class="form-control" >
       <br>
       @if(\Carbon\Carbon::parse($cad->datanascimento)->diff(\Carbon\Carbon::now())->format('%y') < 18)
       <div id="responsavelFinanceirodiv" >
       Responsável Financeiro<div class='text-danger'>(Para menores de 18 anos)</div>  
       <input type="text"   name="responsavelFinanceiro" id="responsavelFinanceiro"  
       value="{{ $cad->responsavelFinanceiro ?? old ('responsavelFinanceiro')}}" class="form-control" required>
         <br> </div>
         @endif
         <div id="responsavelFinanceirodiv" style="display: none;">
       Responsável Financeiro<div class='text-danger'>(Para menores de 18 anos)</div>  
       <input type="text"   name="responsavelFinanceiro" id="responsavelFinanceiro"  
       value="{{ $cad->responsavelFinanceiro ?? old ('responsavelFinanceiro')}}" class="form-control" required>
         <br> </div>
  CPF:
         <input type="text" name="cpf" id="cpf"  value="{{ $cad->cpf ?? old ('cpf')}}" class="form-control">
       <br>
         <button type="subbmit" class="btn btn-primary addCompany">Salvar</button>


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
  } else {
    document.getElementById("responsavelFinanceirodiv").style.display = "block";
    document.getElementById("responsavelFinanceiro").required = true;
   }

};
         </script>