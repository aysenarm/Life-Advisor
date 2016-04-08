<?php
session_start();

$_SESSION['username']  = 'user5';
$_SESSION['password'] = "password5";
$_SESSION['userId'] = "5";


header('location: index_temp.php');

?>