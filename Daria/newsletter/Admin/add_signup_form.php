<?php
require_once '../../../content_top.php';
?>

<div id="page">
    <div id="header">
        <h1>Add Subscriber</h1>
    </div>
    <div id="main">
        <form action="add_signup.php" method="post" id="add_signup_form">
            <label>Signup Email:</label>
            <input type="input" name="signupemail" />
            <br /><br />

            <label>Signup Date:</label>
            <input type="input" name="signupdate" />
            <br /><br />

            <input type="submit" value="Add Email Address" />
            <br />
        </form>
        <p><a href="index.php">View List</a></p>
    </div><!-- end main -->
</div><!-- end page -->
