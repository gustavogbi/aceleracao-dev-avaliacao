<?php

class Mongo implements DatabaseDriver
{
  public function handleQuery($query)
  {
    return $query . " on Mongo server";
  }
}
