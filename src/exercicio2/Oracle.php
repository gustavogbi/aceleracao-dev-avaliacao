<?php

namespace aceleradev\exercicio2;

class Oracle implements DatabaseDriver
{
  public function handleQuery($query)
  {
    return $query . " on Oracle server";
  }
}
