<?php

$signupemail = $_POST['signupemail'];
$signupdate = $_POST['signupdate'];
// Validate inputs
if (empty($signupemail) || empty($signupdate)) {
    $error = "Invalid product data. Check all fields and try again.";
    include('error.php');
} else {
    require_once('database1.php');
    $query = "INSERT INTO signups
                 (signup_email_address, signup_date)
              VALUES
                 ('$signupemail', '$signupdate')";
    $db->exec($query);
    header('location: index.php');
}
?>

