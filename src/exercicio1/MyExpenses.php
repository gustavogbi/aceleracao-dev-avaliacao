<?php 


class MyExpenses {
    public $despesasDiaMes = [];
    public $cpf;

    public function __construct($cpf, $despesasDiaMes)
    {
        $this->cpf = $cpf;
        $this->despesaDiaMes= $despesasDiaMes;
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
         $objSerializado = serialize($despesaMes);
        $filename = $this->nomeDoIndividuo . ".txt";
        $file = fopen($filename, "a+");
        fwrite($file, $objSerializado);
        fclose($file);
        echo "arquivo gravado com sucesso";


    }

}


