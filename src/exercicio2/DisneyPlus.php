<?php

class DisneyPlus extends StreamingService
{
  function listShows()
  {
    return $this->dbDriver->handleQuery("list shows from DisneyPlus");
  }
}
