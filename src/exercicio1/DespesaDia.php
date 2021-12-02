<?php

require_once('DespesaMes.php');

class DespesaDia  extends DespesaMes{
    private $dia;
    public function DespesaDia($dia, $mes, $valor){
        $this->getMes(); 
        $this->getValor();
      }
    public function getDia(){
        return $this->dia;
    }
}


?>