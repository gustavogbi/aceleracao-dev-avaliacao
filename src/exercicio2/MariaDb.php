<?php

namespace aceleradev\exercicio2;

class MariaDb implements DatabaseDriver
{
  public function handleQuery($query)
  {
    return $query . " on MariaDb server";
  }
}
