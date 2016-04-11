<?php
session_start();

$_SESSION['username']  = 'user3';
$_SESSION['password'] = "password3";
$_SESSION['userId'] = "3";


header('location: index_temp.php');

?>