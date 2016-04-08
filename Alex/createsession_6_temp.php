<?php
session_start();

$_SESSION['username']  = 'user6';
$_SESSION['password'] = "password6";
$_SESSION['userId'] = "6";


header('location: index_temp.php');

?>