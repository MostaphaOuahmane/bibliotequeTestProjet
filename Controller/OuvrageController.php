<?php
include_once("Model/OuvrageDAo.php");
class OuvrageController {
    /** url: action=ouvragesParMotsCles?motscles=... */
    public static function getByMotsCles() {
        $expressions = filter_input(INPUT_GET, "expressions") or "" ;
        // D'abord tout en dur
        // $ouvrages = [
        //     ["id" => 1, "titre" => 'Harry Potter', "id-auteur" => '1', "prenom_auteur" => "Prenom 1", "nom_auteur" => "nom1"],
        //     ["id" => 2, "titre" => 'Naruto Shippuden', "id_auteur" => 2, "prenom_auteur" => "Prenom 2", "nom_auteur" => "nom2"]
        // ];
        //$expressions = isset($_POST['expressions']) ? $_POST['expressions'] : '';
       // $expressions = " Harry  Potter   Naruto ";
        $motscles = explode(' ', preg_replace('/ +/', ' ', trim($expressions)));
        $ouvrages= OuvrageDAO::findByMotsCles($motscles);
        include_once("View/ouvrageV.php");
    } 
}