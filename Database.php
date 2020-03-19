<?php
  

class Database
{
    //properties
    private static $user = 'HPeujBoKAW';
    private static $pass = 'nZWeghZ0P9';
    private static $dsn = 'mysql:host=remotemysql.com;dbname=HPeujBoKAW';
    private static $dbcon;

    private function __construct()
    {
    }

    //get pdo connection
    public static function getDb(){
        if(!isset(self::$dbcon)) {
            try {
                self::$dbcon = new PDO(self::$dsn, self::$user, self::$pass);
                self::$dbcon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                self::$dbcon->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
            } catch (PDOException $e) {
                $msg = $e->getMessage();
                include 'error.php';
                exit();
            }
        }

        return self::$dbcon;
    }
}


?>