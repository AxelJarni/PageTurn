<?php
// Classe pour se connecter à la base de données
// Son usage n'est pas obligatoire, vous pouvez faire sans

class dataBase
{
    const HOST = "localhost";
    const DBNAME = "pageturn";
    const USER = "root";
    const PASSWORD = "";
    private static ?PDO $db = null;
  

    public static function getDB() {
      try {
        if(!self::$db) {
          $db = new PDO("mysql:host=" . self::HOST . ";dbname=" . self::DBNAME, self::USER, self::PASSWORD);
          $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          self::$db = $db;
        }
        return self::$db;
      } 
      catch (\Exception $e) {
        echo "Erreur lors de la connexion à la base de donée: " . $e->getMessage() . "<br/>";
        die();
      }
    }

}
