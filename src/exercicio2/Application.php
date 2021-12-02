<?php

interface Application
{
  public function setDatabaseDriver(DatabaseDriver $dbDriver);
  public function listShows();
}
