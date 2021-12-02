<?php

class Postgres implements DatabaseDriver
{
  public function handleQuery($query)
  {
    return $query . " on Postgres server";
  }
}
