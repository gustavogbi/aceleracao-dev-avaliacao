<?php

class NorthTV extends StreamingService
{
  function listShows()
  {
    return $this->dbDriver->handleQuery("list shows from NorthTV");
  }
}
