
<?php
include_once "../../../content_top.php";
include_once 'newsletterdb.php';
?>
<?php

    require_once('database1.php');

    $query = "SELECT * FROM signups ORDER BY id";
    $sunscribers = $db->query($query);


    echo '<form method="post" action="sendnow.php">';
    echo '<input type = "checkbox" name="selectall" id="selectall"/>Select All<br/><br/>';

    $new = $_POST['newsletter_id'];
    echo '<input type="hidden" name="newsletter_id" value="'.$new .'"/>';
    foreach ($sunscribers as $sunscriber){
        echo '<input type = "checkbox" name = "email[]" value = "' . $sunscriber['signup_email_address'] . '"/> ' . $sunscriber['signup_email_address']  . "<br>";

    }
    echo '<br><input type="submit" value="Send"></form>';

    ?>

<script type="text/javascript">
    $('#selectall').click(function() {
        $(this.form.elements).filter(':checkbox').prop('checked', this.checked);
    });
</script>


