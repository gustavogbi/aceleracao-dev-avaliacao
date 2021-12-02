<?php

namespace aceleradev\exercicio2;

class FullAnimations extends StreamingService
{
  function listShows()
  {
    return $this->dbDriver->handleQuery("list shows from FullAnimations");
  }
}
