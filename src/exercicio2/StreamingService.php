<?php

abstract class StreamingService implements Application
{
  protected $dbDriver;

  function setDatabaseDriver(DatabaseDriver $dbDriver)
  {
    $this->dbDriver = $dbDriver;
  }
}
