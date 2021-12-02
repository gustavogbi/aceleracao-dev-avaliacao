<?php

namespace aceleradev\exercicio2;

interface DatabaseDriver
{
  public function handleQuery($query);
}
