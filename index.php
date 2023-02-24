<?php
if (!isset($_REQUEST['action'])) {
    $action = 'accueil';
} else {
    $action = $_REQUEST['action'];
}

switch ($action) {

    case 'accueil':
        include("includes/navBar.php");
        break;

        case 'form':
            include("View/formV.php");
            break;
    case 'ouvragesParMotsCles':
        $keywords=$_POST['expressions'];
        require_once("Controller/OuvrageController.php");
        OuvrageController::getByMotsCles($keywords);
       include_once("View/ouvrageV.php");
       break;

   /*case 'list':
        require_once("View/formV.php");
        include("view/list.php");
        break;  */
        
}
