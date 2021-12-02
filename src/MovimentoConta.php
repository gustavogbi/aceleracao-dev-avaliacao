<?php

namespace aceleradev;

interface MovimentoConta
{
    public function getCPFCorrentista(): string;
    public function getValorMovimento(): float;
}