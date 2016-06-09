<?php
class Database2 {

    private static $dsn = 'mysql:host=hryshk00.mysql.ukraine.com.ua;dbname=hryshk00_project';
    private static $username = 'hryshk00_project';
    private static $password = 'ufy7nylr';
    private static $db;

    
    private function __construct() {}

    //return reference to pdo object
    public static function getDB () {
    	
        if (!isset(self::$db)) {
            try {
                self::$db = new PDO(self::$dsn,
                                     self::$username,
                                     self::$password);
            } catch (PDOException $e) {
                $error_message = $e->getMessage();
                include('/errors/database_error.php');
                exit();
            }
        }
        return self::$db;
    }
}
?>