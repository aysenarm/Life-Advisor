<?php
if(isset($_POST['submit']))
{
    $subject = $_POST['subject'];
    $semail = $_POST['semail'];
    $content = $_POST['content'];

    if(empty($subject) || empty($semail) || empty($content)){
        echo "Please fiil in all the required fields";
    }
    else{
        require_once('database.php');
        $query = "INSERT INTO newsletter (subject, sender_email, description, time, status)
                  VALUES
                 ('$subject', '$semail', '$content', now(), 'active')";
        $db->exec($query);
    }
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <script type="text/javascript" src="ckeditor/ckeditor.js"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
    <script type='text/javascript' src='../js/script.js'></script>
    <link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
<div class="example">
    <!-- defining main tabs elements -->
    <div id="tabs-container">
        <ul class="tabs">
            <li class="active"><a href="#">Newsletter</a></li>
            <li><a href="#">1</a></li>
            <li><a href="#">1</a></li>
            <li><a href="#">1</a></li>
        </ul>
    </div>
    <!-- defining top menu -->
    <div id="nav-container">
        <ul class="nav" id="1">
            <!-- defining top menu elements -->
            <li><a href="#">Subscribers</a>
                <ul class="sub">
                    <li><a href="index.php">Subscriber List</a></li>
                    <li><a href="add_signup_form.php">Add Subscriber</a></li>
                </ul>
            </li>

            <li><a href="#">Newsletter</a>
                <ul class="sub">
                    <li><a href="newsletter-list.php">Newsletter List</a></li>
                    <li><a href="newsletter.php">Add newsletter</a></li>
                    <li><a href="#">Send newsletter</a></li>
                </ul></li>
        </ul>
        <ul class="nav" id="2" style="display:none;">
            <li><a href="#">Меню #5</a></li>
            <li><a href="#">Меню #6</a></li>
            <li><a href="#">Меню #7</a></li>
        </ul>
        <ul class="nav" id="3" style="display:none;">
            <li><a href="#">Меню #8</a></li>
            <li><a href="#">Меню #9</a></li>
            <li><a href="#">Меню #10</a></li>
        </ul>
        <ul class="nav" id="4" style="display:none;">
            <li><a href="#">Меню #11</a></li>
            <li><a href="#">Меню #12</a></li>
        </ul>
    </div>
    <div style="clear:both"></div>
</div>
<form method="post" action="newsletter.php">
<div id="mainSection">
<h3>Create Newsletter</h3>

    <div id="form-elements">
        <label for="Subject">Subject</label>
        <input type="text" name="subject" id="subject"/>
    </div>

    <div id="form-elements">
        <label for="Subject">Sender's email</label>
        <input type="text" name="semail" id="semail"/>
    </div>
    <label for="Subject">Content</label>
    <div id="form-elements">

        <textarea name="content" id="content">
        </textarea>
            <script type="text/javascript">
                CKEDITOR.replace('content');
            </script>
    </div>

    <div id="form-elements">
        <label></label>
        <input type="submit" name="submit" id="semail" value="submit"/>
    </div>
    </form>
</div>
</body>
</html>
