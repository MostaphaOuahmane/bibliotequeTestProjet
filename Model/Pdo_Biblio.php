<?php 
   class Pdo_Biblio {
    private static $bdHoste = 'mysql:host=localhost';
    private static $bdName = 'dbname=bibliotheques' ;
    private static $bdPassword="" ;
    private static $Utilisateur="root" ;
    private static $monPDO ;
    private static $bdoStatu = null ;

    // constructor

    private function __constructor(){
        Pdo_Biblio::$monPDO = new PDO(Pdo_Biblio::$bdHoste.';'.Pdo_Biblio::$bdName,Pdo_Biblio::$Utilisateur,Pdo_Biblio::$bdPassword);
        Pdo_Biblio::$monPDO->query(" SET CHARACTER SET utf8");
    
    }
    public function __destruct(){
        Pdo_Biblio::$monPDO = null;
    }

    public function getPdo_Biblio(){
        if(Pdo_Biblio::$bdoStatu=== null){
            Pdo_Biblio::$bdoStatu = new Pdo_Biblio();
        }
        return Pdo_Biblio::$bdoStatu;
    }
    public function getmonPDO(){
        return Pdo_Biblio::$monPDO ;
    }
   } 

  

?>