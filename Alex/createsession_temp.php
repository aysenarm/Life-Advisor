<?php
session_start();

$_SESSION['username']  = 'user';
$_SESSION['password'] = "password";
$_SESSION['userId'] = "5";


header('location: index_temp.php');

?>