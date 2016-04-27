<?php
$id = $_POST['id'];
$subject = $_POST['subject'];
$semail = $_POST['semail'];
$content = $_POST['content'];
$time = $_POST['time'];
$status = $_POST['status'];

// Validate inputs
if (empty($subject) || empty($semail) || empty($content) || empty($time) || empty($status)) {
    $error = "Invalid product data. Check all fields and try again.";
    include('error.php');
} else {
    // If valid, update the product to the database
    require_once('newsletterdb.php');
    $pdb =  new NewsletterDB();
    $pdb->updateNewsletter($id,$subject,$semail,$content,$time,$status);

    header('location: newsletter-list.php');
}
?>