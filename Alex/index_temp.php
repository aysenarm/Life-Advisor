<?php session_start(); ?>
<?php require_once '../content_top.php'; ?>


<title>Index Temporary</title>

<!-----------------Donations----------------->

    <h2>Donations</h2><br/>

        <h4>User page</h4>
            <p><a href="donation_add_form.php">Add donation</a></p>
        <br/>

        <h4>Admin page</h4>
            <p><a href="donation_admin.php">View list of donations - Change donations - Update donations</a></p>

<br/><br/>

<!-----------------Contact Us----------------->

    <h2>Contact Us</h2><br/>

        <h4>User personal page</h4>
            <p><a href="contactus_add_form_user.php">The personal user page with user questions - Add question - Delete user questions</a></p>
        <br/>

         <h4>Admin page</h4>
            <p><a href="contactus_admin.php">List of questions - Answer the question - Delete the question</a></p>

<br/><br/>

<!-----------------Questionnaire----------------->

    <h2>Questionnaire</h2><br/>

        <h4>User personal page</h4>
            <p><a href="questionnaire_add_form_user.php">The personal user page with questions about website - Add answer</a></p>
        <br/>

        <h4>Admin page</h4>
            <p><a href="questionnaire_admin.php">List of answers - Delete answers</a></p>

<br/><br/>


<!-----------------Session----------------->

    <h2>Session</h2><br/>

        <p><a href="createsession_1_temp.php">Create session for User 1</a></p>
        <p><a href="createsession_2_temp.php">Create session for User 2</a></p>
        <p><a href="createsession_3_temp.php">Create session for User 3</a></p>
        <p><a href="createsession_4_temp.php">Create session for User 4</a></p>
        <p><a href="createsession_5_temp.php">Create session for User 5</a></p>
        <p><a href="createsession_6_temp.php">Create session for User 6</a></p>
        <p><a href="createsession_7_temp.php">Create session for User 7</a></p>
        <p><a href="createsession_8_temp.php">Create session for User 8</a></p>
        <p><a href="createsession_9_temp.php">Create session for User 9</a></p>
        <p><a href="createsession_10_temp.php">Create session for User 10</a></p>
        <br/>

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