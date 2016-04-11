<?php
session_start();

$_SESSION['username']  = 'user4';
$_SESSION['password'] = "password4";
$_SESSION['userId'] = "4";


header('location: index_temp.php');

?>