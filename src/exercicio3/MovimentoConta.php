<?php

namespace aceleradev\exercicio3;

interface MovimentoConta
{
    public function getCPFCorrentista(): string;
    public function getValorMovimento(): float;
}
