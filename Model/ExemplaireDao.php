<?php
require_once 'Pdo_Biblio.php';
class ExemplaireDao  {
    
    public static function getByIdOuvrage($id) {
        $ouvrage = array();
        $sql = Pdo_Biblio::database()->prepare("SELECT ouvrage.titre ,bibliotheque.nom  FROM exemplaire 
        JOIN ouvrage on ouvrage.id_ouvrage = exemplaire.id_exemplaire
        JOIN bibliotheque ON bibliotheque.id_bibliotheque = exemplaire.id_bibliotheque 
        WHERE exemplaire.id_ouvrage = ?") ;
        $sql->execute(array($id));
        $ouvrage = $sql->fetchAll(PDO::FETCH_ASSOC);
        return $ouvrage ;
    }
}
