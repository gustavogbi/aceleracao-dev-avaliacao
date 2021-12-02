<?php

namespace aceleradev;

interface OperacoesBanco
{
    public function encontraCorrentista(array $todosCorrentistas, string $cpfProcurado): ?Correntista;
}