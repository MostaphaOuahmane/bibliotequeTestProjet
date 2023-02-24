<?php
require_once 'Pdo_Biblio.php';
class ExemplaireDao  {
    
    public static function getByIdOuvrage($id) {
        $ouvrage = array();
        $sql = Pdo_Biblio::database()->prepare("SELECT ouvrage.titre ,bibliotheque.nom ,emprunt.date_retour ,exemplaire.* FROM exemplaire 
        JOIN ouvrage on ouvrage.id_ouvrage = exemplaire.id_ouvrage
        JOIN bibliotheque ON bibliotheque.id_bibliotheque = exemplaire.id_bibliotheque 
        LEFT OUTER JOIN emprunt on emprunt.id_exemplaire = exemplaire.id_exemplaire
        WHERE exemplaire.id_ouvrage = ? ORDER BY nom") ;
        $sql->execute(array($id));
        $ouvrage = $sql->fetchAll(PDO::FETCH_ASSOC);
        return $ouvrage ;
    }
}
