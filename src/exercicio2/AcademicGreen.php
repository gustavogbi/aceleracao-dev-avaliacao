<?php

namespace aceleradev\exercicio2;

class AcademicGreen extends StreamingService
{
  function listShows()
  {
    return $this->dbDriver->handleQuery("list shows from AcademicGreen");
  }
}
