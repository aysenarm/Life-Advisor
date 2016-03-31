<?php session_start(); ?>
<?php require_once '../content_top.php'; ?>


<title>Index Temporary</title>

    <h2>Donations</h2><br/>
        <h4>User page</h4>
            <p><a href="donation_add_form.php">Add donation</a></p>

        <h4>Admin page</h4>
            <p><a href="donation_admin.php">View list of donations - Change donations - Update donations</a></p>

<br/><br/>

    <h2>Contact Us</h2><br/>
        <h4>User personal page</h4>
            <p><a href="contactus_add_form_user.php">The personal user page with user questions - Add question - Delete user questions</a></p>

         <h4>Admin page</h4>
            <p><a href="contactus_admin.php">List of questions - Answer the question - Delete the question</a></p>

<br/><br/>

    <h2>Session</h2><br/>
        <p><a href="createsession_temp.php">Create session</a></p>
        <p><a href="destroysession_temp.php">Destroy session</a></p>

<br/><br/>

<?php

    if(!isset($_SESSION['username']) OR !isset($_SESSION['password']) OR !isset($_SESSION['userId'])){
        echo "<b>Error! Create session!!!</b>";
    }
    else{
        echo "<b>Username: </b>" . $_SESSION['username'] . "<br/>";
        echo "<b>Password: </b>" . $_SESSION['password'] . "<br/>";
        echo "<b>User ID: </b>" . $_SESSION['userId'] . "<br/>";
    }
?>

<?php require_once '../content_bottom.php'; ?>