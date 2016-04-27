<?php
require_once('database.php');
$query = "SELECT * FROM signups ORDER BY id";
$sunscribers = $db->query($query);

echo '<input type = "checkbox" name="selectall" id="selectall"/>Select All<br/><br/>';
echo '<form method="post" action="sendnow.php">';
foreach ($sunscribers as $sunscriber){
    echo '<input type = "checkbox" name = "email[]" value = "' . $sunscriber['signup_email_address'] . '"/> ' . $sunscriber['signup_email_address']  . "<br>";

}
echo '<br><input type="submit" value="Send"></form>';
