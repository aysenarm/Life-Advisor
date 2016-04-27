<?php
require 'Database.class.php';
require 'Newsletter.class.php';
?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Newsletter Form</title>
</head>
<body>

<div>
    <h3>Get Email Update</h3>
        <form action="send.php" method="post" id="newsletter" name="newsletter">
            <input type="email" name="signup-email" id="signup-email" value="" placeholder="Insert email here" />
            <input type="submit" value="Subscribe" name="signup-button" id="signup-button">
        </form>
    <div id="response"><?php if (!empty($_POST)) {
            $email = $_POST['signup-email'];
            $response = [];
            $response = json_decode(Newsletter::register($email), true);

            if($response['status']=='success'){
                include_once 'gmail.php';
            }
            echo $response['message'];

        } ?></div>
</div>
</body>
</html>