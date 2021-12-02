<?php

class SkyPobre extends StreamingService
{
  function listShows()
  {
    return $this->dbDriver->handleQuery("list shows from SkyPobre");
  }
}
