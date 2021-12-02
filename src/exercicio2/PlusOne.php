<?php

namespace aceleradev\exercicio2;

class PlusOne extends StreamingService
{
  function listShows()
  {
    return $this->dbDriver->handleQuery("list shows from PlusOne");
  }
}
