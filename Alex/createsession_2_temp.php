<?php
session_start();

$_SESSION['username']  = 'user2';
$_SESSION['password'] = "password2";
$_SESSION['userId'] = "2";


header('location: index_temp.php');

?>