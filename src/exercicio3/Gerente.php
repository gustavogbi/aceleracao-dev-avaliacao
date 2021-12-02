<?php

namespace aceleradev\exercicio3;

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

    // function novoSaldo(array $todosCorrentistas): array
    // {
    //         foreach ($todosCorrentistas as $index => $correntista) {
    //                 $saldoAnterior = $correntista->getSaldo();
    //                 $todosCorrentistas[$index]->setSaldo($saldoAnterior);
    //                 $file = fopen("Novo{$correntista->getCPFCliente()}.txt", 'a+');
    //                 $movimentosTxt = "$saldoAnterior". PHP_EOL;   
    //                 $movimentosTxt = serialize($movimentosTxt); 
    //                 fwrite($file, $movimentosTxt);
    //                 fclose($file);
    //         }
    //     return $todosCorrentistas;
    // }
}
