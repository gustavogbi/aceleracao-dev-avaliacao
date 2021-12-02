<?php

require_once('MyExpenses.php');

class DespesaMes{
    private  $mes;
    private  $valor; 
    public function DespesaMes($mes, $valor){
        $this->mes= $mes;
        $this->valor=$valor;
        
    }

    public function getMes(){
        return $this->mes;
    }
    public function getValor(){
        return $this->valor;
    }
}

?>