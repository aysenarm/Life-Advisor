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
        require_once('database.php');
        $query = "INSERT INTO newsletter (subject, sender_email, description, time, status)
                  VALUES
                 ('$subject', '$semail', '$content', now(), 'active')";
        $db->exec($query);
    }
}
?>

<form method="post" action="newsletter.php">

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

