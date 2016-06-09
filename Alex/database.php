<?php
 $dsn = 'mysql:host=hryshk00.mysql.ukraine.com.ua;dbname=hryshk00_project';
 $username = 'hryshk00_project';
 $password = 'ufy7nylr';


    try {
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('database_error.php');
        exit();
    }
?>