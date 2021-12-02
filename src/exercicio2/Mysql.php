<?php

namespace aceleradev\exercicio2;

class Mysql implements DatabaseDriver
{
  public function handleQuery($query)
  {
    return $query . " on MySQL server";
  }
}
