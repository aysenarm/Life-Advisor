<?php
class Database {
	
    private static $dsn = 'mysql:host=localhost;port=3307;dbname=life_advisor';
    private static $username = 'root';
    private static $password = 'usbw';
   //reference to db connection
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
                include('./errors/database_error.php');
                exit();
            }
        }
        return self::$db;
    }
}
?>