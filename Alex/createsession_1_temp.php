<?php
session_start();

$_SESSION['username']  = 'user1';
$_SESSION['password'] = "password1";
$_SESSION['userId'] = "1";


header('location: index_temp.php');

?>