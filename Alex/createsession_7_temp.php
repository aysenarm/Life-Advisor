<?php
session_start();

$_SESSION['username']  = 'user7';
$_SESSION['password'] = "password7";
$_SESSION['userId'] = "7";


header('location: index_temp.php');

?>