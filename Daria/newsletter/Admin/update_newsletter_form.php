<?php
require_once '../Database.class.php';
$id= $_POST['newsletter_id'];
$db = Database::connect();

$sql = "SELECT * FROM newsletter WHERE id= '$id'";
$result = $db->query($sql);
$newsletter = $result->fetch();
?>
<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
<script type='text/javascript' src='../js/script.js'></script>
<link rel="stylesheet" type="text/css" href="style.css" />
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
<form action="update_newsletter.php" method="post">
    <input type="hidden" name="id" value="<?php echo $id; ?>">
    <label>Subject:</label>
    <input type="input" name="subject" value="<?php echo $newsletter['subject']; ?>" />
    <br />

    <label>Sender Email:</label>
    <input type="input" name="semail" value="<?php echo $newsletter['sender_email']; ?>"/>
    <br />

    <label for="Subject">Content:</label>
        <textarea name="content" id="content" value=""><?php echo $newsletter['description']; ?>
        </textarea>
    <script type="text/javascript">
        CKEDITOR.replace('content');
    </script>
    <br />

    <label>Time:</label>
    <input type="input" name="time" value="<?php echo $newsletter['time']; ?>"/>
    <br />

    <label>Status:</label>
    <input type="input" name="status" value="<?php echo $newsletter['status']; ?>" />
    <br />

    <br />
    <label>&nbsp;</label>
    <input type="submit" value="Update Newsletter" />
    <br />
</form>


