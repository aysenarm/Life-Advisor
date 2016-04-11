<?php
session_start();

$_SESSION['username']  = 'user10';
$_SESSION['password'] = "password10";
$_SESSION['userId'] = "10";


header('location: index_temp.php');

?>