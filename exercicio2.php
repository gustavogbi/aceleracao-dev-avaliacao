<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once(__DIR__ . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php');

use aceleradev\exercicio2\DisneyPlus;
use aceleradev\exercicio2\Netflixxx33;
use aceleradev\exercicio2\DarkFilms;
use aceleradev\exercicio2\FullAnimations;
use aceleradev\exercicio2\AnimakaiTV2;
use aceleradev\exercicio2\SkyPobre;
use aceleradev\exercicio2\PlusOne;
use aceleradev\exercicio2\AcademicGreen;
use aceleradev\exercicio2\NorthTV;
use aceleradev\exercicio2\TelgoPlus;
use aceleradev\exercicio2\AvianPlus;
use aceleradev\exercicio2\Oracle;
use aceleradev\exercicio2\Postgres;
use aceleradev\exercicio2\Mongo;
use aceleradev\exercicio2\MariaDb;
use aceleradev\exercicio2\Firebase;
use aceleradev\exercicio2\Mysql;

$disneyPlus = new DisneyPlus();
$disneyPlus->setDatabaseDriver(new Oracle());

$netflixxx33 = new Netflixxx33();
$netflixxx33->setDatabaseDriver(new Postgres());

$darkFilms = new DarkFilms();
$darkFilms->setDatabaseDriver(new Mongo());

$fullAnimations = new FullAnimations();
$fullAnimations->setDatabaseDriver(new MariaDb());

$animakaiTV2 = new AnimakaiTV2();
$animakaiTV2->setDatabaseDriver(new Postgres());

$skyPobre = new SkyPobre();
$skyPobre->setDatabaseDriver(new Oracle());

$plusOne = new PlusOne();
$plusOne->setDatabaseDriver(new Mongo());

$academicGreen = new AcademicGreen();
$academicGreen->setDatabaseDriver(new Firebase());

$northTV = new NorthTV();
$northTV->setDatabaseDriver(new Firebase());

$telgoPlus = new TelgoPlus();
$telgoPlus->setDatabaseDriver(new Mysql());

$avianPlus = new AvianPlus();
$avianPlus->setDatabaseDriver(new Mongo());


echo $disneyPlus->listShows() . "<br>";
echo $netflixxx33->listShows() . "<br>";
echo $darkFilms->listShows() . "<br>";
echo $fullAnimations->listShows() . "<br>";
echo $animakaiTV2->listShows() . "<br>";
echo $skyPobre->listShows() . "<br>";
echo $plusOne->listShows() . "<br>";
echo $academicGreen->listShows() . "<br>";
echo $northTV->listShows() . "<br>";
echo $telgoPlus->listShows() . "<br>";
echo $avianPlus->listShows() . "<br>";
