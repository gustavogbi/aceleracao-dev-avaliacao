<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require('./src/exercicio2/autoload.php');

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
