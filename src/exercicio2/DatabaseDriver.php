<?php

interface DatabaseDriver
{
  public function handleQuery($query);
}
