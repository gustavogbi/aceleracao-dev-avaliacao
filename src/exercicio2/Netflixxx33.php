<?php

class Netflixxx33 extends StreamingService
{
  function listShows()
  {
    return $this->dbDriver->handleQuery("list shows from Netflixxx33");
  }
}
