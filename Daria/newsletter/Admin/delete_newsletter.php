<?php
// Get IDs
$newsletter_id = $_POST['newsletter_id'];

require_once('database1.php');
$query = "DELETE FROM newsletter
          WHERE id = '$newsletter_id'";
$db->exec($query);

header('location: newsletter-list.php');
?>