<?php

$id = $_POST['id'];

require_once('database.php');

$query = "DELETE FROM donations WHERE donationID = :id";
$db->exec($query);

$statement = $db->prepare($query);
$statement->bindValue(':id', $id);
$statement->execute();
$statement->closeCursor();

header('location: donation_admin.php');
?>