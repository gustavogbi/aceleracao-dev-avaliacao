<?php

require_once('DespesaMes.php');

class DespesaDia extends DespesaMes{

    protected int  $diaDaDespesa;

    public function __construct(int $mesDaDespesa, int $diaDaDespesa, float $valorDaDespesa)
    {
        parent::__construct($mesDaDespesa,$valorDaDespesa);
        $this->diaDaDespesa = $diaDaDespesa;
    }
    public function getDia():int{
        return $this->diaDaDespesa;
    }

}


?>