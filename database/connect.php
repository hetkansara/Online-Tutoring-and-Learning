<?php

class Database
{
    private static $user = 'HPeujBoKAW';
    private static $pass = 'nZWeghZ0P9';
    private static $dsn = 'mysql:host=remotemysql.com;dbname=HPeujBoKAW;port=3306';
    private static $dbcon;

    private function __construct()
    {

    }

    public static function getDb()
    {
        if (!isset(self::$dbcon)) {
            try {
                self::$dncon = new \PDO(self::$dsn, self::$user, self::$password);
            } catch (PDOException $e) {
                $msg = $e->getMessage();
                include "customError.php";
                exit();
            }
        }
        return self::$dncon;
    }

}


