<?php
  require_once("Model/ExemplaireDao.php");
 $exemplaires = ExemplaireDao::getByIdOuvrage(1);
  require_once('View/exemplairesV.php'); ?>