<?php

namespace aceleradev\exercicio2;

class TelgoPlus extends StreamingService
{
  function listShows()
  {
    return $this->dbDriver->handleQuery("list shows from TelgoPlus");
  }
}
