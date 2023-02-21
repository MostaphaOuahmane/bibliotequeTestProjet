<?php
class OuvrageController {
    /** url: action=ouvragesParMotsCles?keywords=... */
    public static function getByKeywords() {
        // D'abord tout en dur
        $ouvrages = [
            ["id" => 1, "titre" => 'Harry Potter', "id-auteur" => '1', "prenom_auteur" => "Prenom 1", "nom_auteur" => "nom1"],
            ["id" => 2, "titre" => 'Naruto Shippuden', "id_auteur" => 2, "prenom_auteur" => "Prenom 2", "nom_auteur" => "nom2"]
        ];
        $keyWords = [
            ["Harry Poter ","Naruto"]
        ];
        include_once("View/ouvrageV.php");
    } 
}