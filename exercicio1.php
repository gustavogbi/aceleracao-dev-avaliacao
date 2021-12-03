<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once(__DIR__ . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php');

use aceleradev\exercicio2\{
    DespesasDia,
    DespesasMes,
    MyExpenses,
    index,
};


$despesaDia = new DespesasDia();
$despesaDia->setDatabaseDriver(new Oracle());

$despesasMes = new DespesasMes();
$netflixxx33->setDatabaseDriver(new Postgres());

$myExpenses = new     MyExpenses();
$myExpenses->setDatabaseDriver(new Mongo());

$index = new Index();
$index->setDatabaseDriver(new MariaDb());



echo $despesaDia->listShows() . "<br>";
echo $despesasMes->listShows() . "<br>";
echo $myExpenses->listShows() . "<br>";
echo $index->listShows() . "<br>";