<?php

interface Application
{
  public function setDatabaseDriver(DatabaseDriver $dbDriver);
  public function listShows();
}

interface DatabaseDriver
{
  public function handleQuery($query);
}

abstract class StreamingService implements Application
{
  protected $dbDriver;

  function setDatabaseDriver(DatabaseDriver $dbDriver)
  {
    $this->dbDriver = $dbDriver;
  }
}

# STREAMING SERVICES

class DisneyPlus extends StreamingService
{
  function listShows()
  {
    return $this->dbDriver->handleQuery("list shows from DisneyPlus");
  }
}

class Netflixxx33 extends StreamingService
{
  function listShows()
  {
    return $this->dbDriver->handleQuery("list shows from Netflixxx33");
  }
}

class DarkFilms extends StreamingService
{
  function listShows()
  {
    return $this->dbDriver->handleQuery("list shows from DarkFilms");
  }
}

class FullAnimations extends StreamingService
{
  function listShows()
  {
    return $this->dbDriver->handleQuery("list shows from FullAnimations");
  }
}

class AnimakaiTV2 extends StreamingService
{
  function listShows()
  {
    return $this->dbDriver->handleQuery("list shows from AnimakaiTV2");
  }
}

class SkyPobre extends StreamingService
{
  function listShows()
  {
    return $this->dbDriver->handleQuery("list shows from SkyPobre");
  }
}

class PlusOne extends StreamingService
{
  function listShows()
  {
    return $this->dbDriver->handleQuery("list shows from PlusOne");
  }
}

class AcademicGreen extends StreamingService
{
  function listShows()
  {
    return $this->dbDriver->handleQuery("list shows from AcademicGreen");
  }
}

class NorthTV extends StreamingService
{
  function listShows()
  {
    return $this->dbDriver->handleQuery("list shows from NorthTV");
  }
}

class TelgoPlus extends StreamingService
{
  function listShows()
  {
    return $this->dbDriver->handleQuery("list shows from TelgoPlus");
  }
}

class AvianPlus extends StreamingService
{
  function listShows()
  {
    return $this->dbDriver->handleQuery("list shows from AvianPlus");
  }
}

# Database Drivers

class Mysql implements DatabaseDriver
{
  public function handleQuery($query)
  {
    return $query . " on MySQL server";
  }
}

class Mongo implements DatabaseDriver
{
  public function handleQuery($query)
  {
    return $query . " on Mongo server";
  }
}

class Firebase implements DatabaseDriver
{
  public function handleQuery($query)
  {
    return $query . " on Firebase server";
  }
}

class Oracle implements DatabaseDriver
{
  public function handleQuery($query)
  {
    return $query . " on Oracle server";
  }
}

class Postgres implements DatabaseDriver
{
  public function handleQuery($query)
  {
    return $query . " on Postgres server";
  }
}

class MariaDb implements DatabaseDriver
{
  public function handleQuery($query)
  {
    return $query . " on MariaDb server";
  }
}

# TESTS

$disneyPlus = new DisneyPLus();
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
