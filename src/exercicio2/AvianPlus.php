<?php

namespace aceleradev\exercicio2;

class AvianPlus extends StreamingService
{
  function listShows()
  {
    return $this->dbDriver->handleQuery("list shows from AvianPlus");
  }
}
