<?php
require_once '../../../content_top.php';
if(isset($_POST['submit']))
{
    $subject = $_POST['subject'];
    $semail = $_POST['semail'];
    $content = $_POST['content'];

    if(empty($subject) || empty($semail) || empty($content)){
        echo "Please fiil in all the required fields";
    }
    else{
        require_once('database1.php');
        $query = "INSERT INTO newsletter (subject, sender_email, description, time, status)
                  VALUES
                 ('$subject', '$semail', '$content', now(), 'active')";
        $db->exec($query);
    }
}
?>

<h3>Add Newsletter</h3>
<div class="form-group">
<form method="post" action="newsletter.php" enctype="multipart/form-data" class="form-horizontal">


        <div class="form-group" style="margin-left: 10px;">
            <label class="col-sm-2 control-label" style="color: black">Subject:</label>
            <div class="col-sm-10">
                <input type="text" class="col-sm-2 form-control" name="subject" id="subject" />
            </div>
            <br />
        </div>

        <div class="form-group" style="margin-left: 10px;">
            <label class="col-sm-2 control-label" style="color: black">Sender's email:</label>
            <div class="col-sm-10">
                <input type="text" class="col-sm-2 form-control" name="semail" id="semail" />
            </div>
            <br />
        </div>

        <div class="form-group" style="margin-left: 10px;">
            <label class="col-sm-2 control-label" style="color: black">Content:</label>
            <div class="col-sm-10">
               <textarea name="content" id="content"></textarea>
                <script type="text/javascript">
                    CKEDITOR.replace('content');
                </script>
            </div>
            <br />
        </div>
        <br/>
        <input type="submit" class="btn btn-default" name="submit" id="semail" value="Add Newsletter"/>
</form>

<hr>
<p><a href="newsletter-list.php" class="btn btn-default">Back</a></p>
</div>

