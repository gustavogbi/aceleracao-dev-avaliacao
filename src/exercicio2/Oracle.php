<?php

class Oracle implements DatabaseDriver
{
  public function handleQuery($query)
  {
    return $query . " on Oracle server";
  }
}
