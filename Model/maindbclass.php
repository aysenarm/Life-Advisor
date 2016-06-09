<?php

class mainDbclass{
    
    
    private static $dsn = 'mysql:host=hryshk00.mysql.ukraine.com.ua;dbname=hryshk00_project';
    private static $username = 'hryshk00_project';
    private static $password = 'ufy7nylr';
    private static $db;
    
    private function __construct() {
        
    }
    
    public static function getDB(){

        try {
            if(!isset(self::$db)){
                self::$db = new PDO(self::$dsn, self::$username, self::$password);
                self::$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }
        } catch (PDOException $e) {
            $error_message = $e->getMessage();
            include('maindatabase_error.php');
            exit();
        }
        
        return self::$db;
    }
}
