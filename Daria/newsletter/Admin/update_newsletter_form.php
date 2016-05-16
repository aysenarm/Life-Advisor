<?php
include_once "../../../content_top.php";
require_once '../Database.class.php';

$id= $_POST['newsletter_id'];
$db = Database::connect();

$sql = "SELECT * FROM newsletter WHERE id= '$id'";
$result = $db->query($sql);
$newsletter = $result->fetch();
?>
<script type="text/javascript" src="ckeditor/ckeditor.js"></script>

<link rel="stylesheet" type="text/css" href="style.css" />
<h3>Update Newsletter</h3>
<form action="update_newsletter.php" method="post" class="form-horizontal">

    <input type="hidden" name="id" value="<?php echo $id; ?>">

    <div class="form-group" style="margin-left: 10px;">
        <label class="col-sm-2 control-label">Subject:</label>
        <div class="col-sm-10">
            <input type="input" class="col-sm-2 form-control" name="subject" value="<?php echo $newsletter['subject']; ?>"/>
        </div>
        <br />
    </div>

    <div class="form-group" style="margin-left: 10px;">
        <label class="col-sm-2 control-label">Email:</label>
        <div class="col-sm-10">
            <input type="input" class="col-sm-2 form-control" name="semail" value="<?php echo $newsletter['sender_email']; ?>"/>
        </div>
        <br />
    </div>

    <div class="form-group" style="margin-left: 10px;">
        <label class="col-sm-2 control-label">Content:</label>
        <div class="col-sm-10">
            <textarea name="content" id="content" value=""><?php echo $newsletter['description']; ?>
        </textarea>
            <script type="text/javascript">
                CKEDITOR.replace('content');
            </script>
        </div>
        <br />
    </div>

    <div class="form-group" style="margin-left: 10px;">
        <label class="col-sm-2 control-label">Time:</label>
        <div class="col-sm-10">
            <input type="input" class="col-sm-2 form-control" name="time" value="<?php echo $newsletter['time']; ?>"/>
        </div>
        <br />
    </div>

    <div class="form-group" style="margin-left: 10px;">
        <label class="col-sm-2 control-label">Status:</label>
        <div class="col-sm-10">
            <input type="input" class="col-sm-2 form-control" name="status" value="<?php echo $newsletter['status']; ?>"/>
        </div>
        <br />
    </div>

    <input style="margin-left: 10px;" type="submit" value="Update"  class="btn btn-default"/>
</form>

<hr>
<p style="margin-left: 10px;"><a href="newsletter-list.php" class="btn btn-default">Back</a></p>


