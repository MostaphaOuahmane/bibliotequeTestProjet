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
    case 'ouvragesParMotsCles':
        require_once("Controller/OuvrageController.php");
        OuvrageController::getByMotsCles();
        break;
}
?>