<?php


class AnimakaiTV2 extends StreamingService
{
  function listShows()
  {
    return $this->dbDriver->handleQuery("list shows from AnimakaiTV2");
  }
}
