<?php

namespace aceleradev\exercicio3;

interface OperacoesBanco
{
    public function encontraCorrentista(array $todosCorrentistas, string $cpfProcurado): ?Correntista;
}
