<?php

class FullAnimations extends StreamingService
{
  function listShows()
  {
    return $this->dbDriver->handleQuery("list shows from FullAnimations");
  }
}
