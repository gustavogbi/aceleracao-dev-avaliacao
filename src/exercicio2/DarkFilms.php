<?php

namespace aceleradev\exercicio2;

class DarkFilms extends StreamingService
{
  function listShows()
  {
    return $this->dbDriver->handleQuery("list shows from DarkFilms");
  }
}
