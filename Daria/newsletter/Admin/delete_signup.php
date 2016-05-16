<?php
// Get IDs
$signup_id = $_POST['signup_id'];

require_once('database1.php');
$query = "DELETE FROM signups
          WHERE id = '$signup_id'";
$db->exec($query);

header('location: index.php');
?>