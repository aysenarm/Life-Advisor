<?php
// Get IDs
$page_id = $_POST['page_id'];

// Delete the product from the database

require_once('../Model/interactiondb.php');

$pdb =  new PageDB();
$pages = $pdb->deletePages($page_id);


// display the Product List page
header('location: ../View/index.php');
?>