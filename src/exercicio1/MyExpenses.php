<?php 


class MyExpenses {
    public $despesasDiaMes = [];
    public $cpf;

    public function __construct($cpf, $despesasDiaMes)
    {
        
    }

    public function getCpf(){
        $cpf = $this->cpf ;
        return $cpf;
    }
    public function totalizaMes($mes){
        $despesas = "Despesas do mes".$mes;
        return $despesas;
    }

    public function GravaInfos(DespesaMes $despesaMes){
        $despesaMes->nomeTitular;


    }

}


