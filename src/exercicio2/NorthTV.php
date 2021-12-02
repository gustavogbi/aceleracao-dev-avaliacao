<?php

namespace aceleradev\exercicio2;

class NorthTV extends StreamingService
{
  function listShows()
  {
    return $this->dbDriver->handleQuery("list shows from NorthTV");
  }
}
