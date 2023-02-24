<?php
include_once("Model/OuvrageDAo.php");

class OuvrageController {
    /** url: action=ouvragesParMotsCles?motscles=... */
    public static function getByMotsCles() {
        $expressions = filter_input(INPUT_GET, "expressions") or "" ;
        $phrases = explode(',', preg_replace('/,+/', ',', trim($expressions)));
        $mots_cles = array();
        foreach ($phrases as $phrase) {
            $mots_cles[] = preg_replace('/\s+/', '%', trim($phrase));
        }
        $ouvrages = OuvrageDAO::findByMotsCles($mots_cles);
        include_once("View/ouvrageV.php");
    }
}