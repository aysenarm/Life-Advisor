<?php

class mainDbclass{
    
    
    private static $dsn = 'mysql:host=localhost;dbname=project';
    private static $username = 'root';
    private static $password = '';
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