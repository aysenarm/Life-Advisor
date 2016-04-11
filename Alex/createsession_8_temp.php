<?php
session_start();

$_SESSION['username']  = 'user8';
$_SESSION['password'] = "password8";
$_SESSION['userId'] = "8";


header('location: index_temp.php');

?>