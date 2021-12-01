<?php

namespace aceleradev;

class Gerente implements OperacoesBanco
{
    public function encontraCorrentista(array $todosCorrentistas, string $cpfProcurado): ?Correntista
    {
        $correntista = NULL;

        foreach ($todosCorrentistas as $correntistaProcurado) {
            if ($correntistaProcurado->getCPFCliente() === $cpfProcurado) {
                $correntista = $correntistaProcurado;
                break;
            }
        }

        return $correntista;
    }
}