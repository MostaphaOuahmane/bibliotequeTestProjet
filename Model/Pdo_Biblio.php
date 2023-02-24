<?php
class Pdo_Biblio
{
   protected static $pdo;
   public  static function database()
   {
      if (is_null(self::$pdo)) {
         self::$pdo = new PDO('mysql:dbname=bibliotheques;host=localhost', 'root', '');
      }
      return static::$pdo;
   }
}
