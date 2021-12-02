<?php

class Firebase implements DatabaseDriver
{
  public function handleQuery($query)
  {
    return $query . " on Firebase server";
  }
}
