<?php

require_once(__DIR__ . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php');

use aceleradev\Correntista;
use aceleradev\Gerente;
use aceleradev\Transferencia;
use aceleradev\OperacoesBanco;

$gerente = new Gerente();

$contaFabio = new Correntista('00000000000', 10000);
$contaCarlos = new Correntista('11111111111', 15000);
$contaGuilherme = new Correntista('22222222222', 20000);


$movimentoFabio = new Transferencia('00000000000', -1000);
$movimentoCarlos = new Transferencia('11111111111', 2000);
$movimentoGuilherme = new Transferencia('22222222222', -3000);

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

function atualizarSaldo(array $todosCorrentistas, array $transferencias, OperacoesBanco $gerente): array
{
    foreach ($transferencias as $transferencia) {
        foreach ($todosCorrentistas as $index => $correntista) {
            if ($transferencia->getCPFCorrentista() == $correntista->getCPFCliente()) {
                $saldoAnterior = $correntista->getSaldo();
                $saldoMovimento = $transferencia->getValorMovimento();
                $saldoResultado = $saldoAnterior + $saldoMovimento;
                $todosCorrentistas[$index]->setSaldo($saldoResultado);

                if(is_dir('src/movimentos')){
                    $file = fopen("src/movimentos/{$correntista->getCPFCliente()}.txt", 'a+');

                    if($saldoMovimento < 0) {
                        $movimentosTxt = "$saldoAnterior$saldoMovimento = $saldoResultado ". PHP_EOL;   
                    } else {
                        $movimentosTxt = "$saldoAnterior+$saldoMovimento = $saldoResultado ". PHP_EOL;   
                    }
                    
                    $movimentosTxt = serialize($movimentosTxt); 
                    fwrite($file, $movimentosTxt);
                    fclose($file);
                }    
            }
        }
    }
    return $todosCorrentistas;
}

$c = atualizarSaldo($c, $m, $gerente);

