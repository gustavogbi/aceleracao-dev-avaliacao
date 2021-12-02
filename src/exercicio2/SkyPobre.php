<?php

namespace aceleradev\exercicio2;

class SkyPobre extends StreamingService
{
  function listShows()
  {
    return $this->dbDriver->handleQuery("list shows from SkyPobre");
  }
}
