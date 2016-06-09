<?php
class Database
{
    private static $dbName = 'hryshk00_project';
    private static $dbHost = 'hryshk00.mysql.ukraine.com.ua';
    private static $dbUsername = 'hryshk00_project';
    private static $dbUserPassword = 'ufy7nylr';

    private static $db = null;

    public function __construct() {
        die('Init function is not allowed');
    }

    public static function connect() {
        if (null === self::$db) {
            try {
                self::$db =  new PDO('mysql:host='.self::$dbHost.'; dbname='.self::$dbName, self::$dbUsername, self::$dbUserPassword);
            } catch(PDOException $e) {
                die($e->getMessage());
            }
        }
        return self::$db;
    }

    public static function disconnect() {
        self::$db = null;
    }
}