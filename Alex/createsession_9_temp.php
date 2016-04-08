<?php
session_start();

$_SESSION['username']  = 'user9';
$_SESSION['password'] = "password9";
$_SESSION['userId'] = "9";


header('location: index_temp.php');

?>