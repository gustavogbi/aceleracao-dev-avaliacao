<?php

namespace aceleradev;

class Correntista
{
    private string $cpfCliente;
    private float $saldo;

    public function __construct(string $cpfCliente, float $saldo)
    {
        $this->cpfCliente = $cpfCliente;
        $this->saldo = $saldo;
    }

    public function getCPFCliente(): string
    {
        return $this->cpfCliente;
    }

    public function getSaldo(): float
    {
        return $this->saldo;
    }

    public function setSaldo(float $saldo): void
    {
        $this->saldo = $saldo;
    }
}