<?php
require 'Pdo_Biblio.php';
class ExemplaireDao extends Pdo_Biblio  {
    
    public static function getByIdOuvrage($id) {
        $ouvrage = array();
        $sql = self::database()->prepare("SELECT * FROM exemplaire where id_ouvrage = ?") ;
        $sql->execute(array($id));
        $ouvrage = $sql->fetchAll(PDO::FETCH_ASSOC);
        return $ouvrage ;
    }
}

?>
