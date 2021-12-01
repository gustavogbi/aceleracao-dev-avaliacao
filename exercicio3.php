<?php

require_once(__DIR__ . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php');

use aceleradev\Correntista;
use aceleradev\Transferencia;

$contaFabio = new Correntista('00000000000', 10000);
$contaCarlos = new Correntista('11111111111', 15000);
$contaGuilherme = new Correntista('22222222222', 20000);


$movimentoFabio = new Transferencia('00000000000', 1000);
$movimentoCarlos = new Transferencia('11111111111', 2000);
$movimentoGuilherme = new Transferencia('22222222222', 3000);

$c = [
    $contaFabio,
    $contaCarlos,
    $contaGuilherme
];

$m = [
    $movimentoFabio,
    $movimentoCarlos,
    $movimentoGuilherme
];

function atualizarSaldo(array $todosCorrentistas, array $transferencias): array
{
    foreach ($transferencias as $transferencia) {
        foreach ($todosCorrentistas as $index => $correntista) {
            if ($transferencia->getCPFCorrentista() == $correntista->getCPFCliente()) {
                $saldoAnterior = $correntista->getSaldo();
                $saldoMovimento = $transferencia->getValorMovimento();
                $saldoResultado = $saldoAnterior - $saldoMovimento;
                $todosCorrentistas[$index]->setSaldo($saldoResultado);
            }
        }
    }

    return $todosCorrentistas;
}

$c = atualizarSaldo($c, $m);
