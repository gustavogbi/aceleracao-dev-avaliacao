<?php

namespace aceleradev\exercicio2;

class DisneyPlus extends StreamingService
{
  function listShows()
  {
    return $this->dbDriver->handleQuery("list shows from DisneyPlus");
  }
}
