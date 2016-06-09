<?php
require '../Database.class.php';
require '../Newsletter.class.php';

include 'database1.php';
include_once '../gmail1.php';
    if(isset($_POST['newsletter_id'])){
        $id = $_POST['newsletter_id'];

        $query = "SELECT * FROM newsletter WHERE id = '$id'";
        $newsletters = $db->query($query);
        foreach($newsletters as $n){
            $sender_email =  $n['sender_email'];
            $subject = $n['subject'];
            $description = $n['description'];
        }

        foreach($_POST['email'] as $e){
            sendnews($e,$sender_email, $subject,$description);
        }
        header('location: newsletter-list.php');
    }
?>