<?php

class Mysql implements DatabaseDriver
{
  public function handleQuery($query)
  {
    return $query . " on MySQL server";
  }
}
