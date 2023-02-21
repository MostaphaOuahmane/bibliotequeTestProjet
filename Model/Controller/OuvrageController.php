<?php
class OuvrageController {
    public static function getByKeywords() {
        $ouvrages = [
            ["id" => 1, "titre" => 'Harry Potter', "auteur_id" => '1'],
            ["id" => 2, "titre" => 'Naruto Shippuden', "auteur_id" => '2'],
            ["id" => 2, "titre" => 'One Piece', "auteur_id" => '3'],
            ["id" => 2, "titre" => 'Les misérables', "auteur_id" => '4'],
            ["id" => 2, "titre" => 'Femmes savantes', "auteur_id" => '5']
        ];

        $KeyWord = [
            ["Harry Poter ","Naruto"]
        ];

        include_once("./View/keyWordV.php");
    } 
}