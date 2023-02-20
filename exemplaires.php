<?php
 require_once("Model/ExemplaireDao.php");
$exemplaires = ExemplaireDao::getByIdOuvrage(3);
require_once('View/exemplairesV.php');