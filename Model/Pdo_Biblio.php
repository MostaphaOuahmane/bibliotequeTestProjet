<?php 
    
   class Pdo_Biblio {
    protected static $pdo ;
        public  static function database () {
            if(is_null(self::$pdo)) {
               self::$pdo = new PDO('mysql:dbname=bibliotheques;host=localhost','biblio_user','biblio_pwd');
                
            }
            
            return static::$pdo ;
          }
   } 

  

?>