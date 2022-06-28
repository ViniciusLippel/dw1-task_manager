<?php
  include_once "conf.inc.php";

  class Connection {  
  
    private static $pdo;
  
    private function __construct() {  
    } 
  
    public static function getInstance() {  
      if (!isset(self::$pdo)) {  
        try {  
          self::$pdo = new PDO(DRIVER.
                               ":host=" . HOST . 
                               "; dbname=" . DBNAME . 
                               ";", USER, PASSWORD 
                            );
          self::$pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        } catch (PDOException $e) {  
          print "Erro: " . $e->getMessage();  
        }  
      }  
      return self::$pdo;  
    }  
  }
?>