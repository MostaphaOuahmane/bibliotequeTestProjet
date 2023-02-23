<?php
if (!isset($_REQUEST['action'])) {
    $action = 'accueil';
} else {
    $action = $_REQUEST['action'];
}

switch ($action) {

    case 'accueil':
        include("View/accueil.php");
        break;
    case 'ouvragesParMotsCles':
        require_once("Controller/OuvrageController.php");
        OuvrageController::getByMotsCles();
        break;
    case 'exemplaires':
        require_once("Model/ExemplaireDao.php");
        $exemplaires = ExemplaireDao::getByIdOuvrage(1);
        require_once('View/exemplairesV.php');
    default :
       include("view/accueil.php");
       break; 
}
?>