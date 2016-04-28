<?php

$id = $_POST['id'];

require_once('database.php');


require_once "Model/cl_donation.php";
$donation_feature = new Donation_feature();
$donation_feature->dda($db, $id);

header('location: donation_admin.php');
?>