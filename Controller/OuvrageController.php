<?php
include_once("Model/OuvrageDAo.php");
class OuvrageController {
    /** url: action=ouvragesParMotsCles?motscles=... */
    public static function getByMotsCles() {
        $expressions = filter_input(INPUT_GET, "expressions") or "" ;
        $motscles = explode(' ', preg_replace('/ +/', ' ', trim($expressions)));
        $ouvrages= OuvrageDAO::findByMotsCles($motscles);
        include_once("View/ouvrageV.php");
    } 
}