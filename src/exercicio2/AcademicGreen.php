<?php

class AcademicGreen extends StreamingService
{
  function listShows()
  {
    return $this->dbDriver->handleQuery("list shows from AcademicGreen");
  }
}
