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
    public function totalizaMes(int $mes){

        $totalDespesasNoMes = 0;

        foreach($this->despesas as $despesa){
            if($despesa->getMes() == $mes){
                $totalDespesasNoMes += $despesa->getValor();
            }
        }
        return new DespesaMes($mes, $totalDespesasNoMes);
        
    }




    public function gravaInfos(DespesaMes $despesaMes){

        $objSerializado = serialize($despesaMes);
        $filename = $this->nomeDoIndividuo . ".txt";
        $file = fopen($filename, "a+");
        fwrite($file, $objSerializado);
        fclose($file);
        echo "arquivo gravado com sucesso";
    }
    
}

?>


