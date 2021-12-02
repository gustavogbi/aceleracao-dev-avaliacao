<?php

class PlusOne extends StreamingService
{
  function listShows()
  {
    return $this->dbDriver->handleQuery("list shows from PlusOne");
  }
}
