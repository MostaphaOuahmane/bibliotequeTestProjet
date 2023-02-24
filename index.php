<?php
if (!isset($_REQUEST['action'])) {
    $action = 'accueil';
} else {
    $action = $_REQUEST['action'];
}

switch ($action) {

    case 'form':
        include("View/formV.php");
        break;
    case 'ouvragesParMotsCles':
        require_once("Controller/OuvrageController.php");
        OuvrageController::getByMotsCles($_GET["expressions"]);
        include_once("View/ouvrageV.php");
        break;
    case 'exemplaires':
        require_once("Model/ExemplaireDao.php");
        $exemplaires = ExemplaireDao::getByIdOuvrage($_GET["id_ouvrage"]);
        require_once('View/exemplairesV.php');
    default:
        include("View/accueil.php");
        break;
}
