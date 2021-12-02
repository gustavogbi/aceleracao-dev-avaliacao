<?php

namespace aceleradev\exercicio2;

abstract class StreamingService implements Application
{
  protected $dbDriver;

  function setDatabaseDriver(DatabaseDriver $dbDriver)
  {
    $this->dbDriver = $dbDriver;
  }
}
