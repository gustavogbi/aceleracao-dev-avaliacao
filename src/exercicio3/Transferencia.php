<?php

namespace aceleradev\exercicio3;

class Transferencia implements MovimentoConta
{
    private $cpf;
    private $valor;

    public function __construct(string $cpf, float $valor)
    {
        $this->cpf = $cpf;
        $this->valor = $valor;
    }

    public function getCPFCorrentista(): string
    {
        return $this->cpf;
    }
    public function getValorMovimento(): float
    {
        return $this->valor;
    }
}
