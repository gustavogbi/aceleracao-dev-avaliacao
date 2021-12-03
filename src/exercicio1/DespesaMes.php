<?php

namespace aceleradev\exercicio1;

class DespesaMes{

    protected int $mesDaDespesa;
    protected float $valorDaDespesa;

    public function __construct(int $mesDaDespesa, float $valorDaDespesa = 0)
    {
        $this->valorDaDespesa = $valorDaDespesa;
        $this->mesDaDespesa = $mesDaDespesa;
    }
    public function getMes():int{
        return $this->mesDaDespesa;
    }
    public function getValor():float{
        return $this->valorDaDespesa;
    }
}
