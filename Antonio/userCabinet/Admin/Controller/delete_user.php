<?php
// Get IDs
$user_id = $_POST['user_id'];

// Delete the product from the database
require_once('../../Model/cabinetdb.php');

$cabinet = new Cabinet();
$users = $cabinet->deleteUser($user_id);


// display the Product List page
header('location: ../View/admin_users.php');
?>