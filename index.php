<?php
if (!isset($_REQUEST['action'])) {
    $action = 'accueil';
} else {
    $action = $_REQUEST['action'];
}

switch ($action) {

    case 'accueil':
        include("view/accueil.php");
        break;

        case 'form':
            include("View/formV.php");
            break;
    case 'ouvragesParMotsCles':
        require_once("Controller/OuvrageController.php");
        OuvrageController::getByMotsCles();
       include_once("View/ouvrageV.php");
       break;

   case 'list':
        require_once("View/formV.php");
        include("view/list.php");
        break;  
        
}
