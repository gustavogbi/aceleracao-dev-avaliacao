<?php

namespace aceleradev\exercicio2;

interface Application
{
  public function setDatabaseDriver(DatabaseDriver $dbDriver);
  public function listShows();
}
