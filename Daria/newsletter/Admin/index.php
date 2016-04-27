<?php
require_once('database.php');

$query = "SELECT * FROM signups ORDER BY id";
$sunscribers = $db->query($query);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<!-- the head section -->
<head>
    <title>Subscribers List</title>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
    <script type='text/javascript' src='../js/script.js'></script>
    <link rel="stylesheet" type="text/css" href="style.css" />
</head>

<!-- the body section -->
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
<div id="page">
    <div id="main">
        <div id="content">
            <h2>Subscribers List</h2>
            <table>
                <tr>
                    <th>Signup Email</th>
                    <th>Signup Date</th>
                    <th>&nbsp;</th>
                </tr>
                <?php foreach ($sunscribers as $sunscriber) : ?>
                    <tr>
                        <td><?php echo $sunscriber['signup_email_address']; ?></td>
                        <td><?php echo $sunscriber['signup_date']; ?></td>

                        <td><form action="delete_signup.php" method="post" id="delete_book_form">
                                <input type="hidden" name="signup_id" value="<?php echo $sunscriber['id']; ?>" />
                                <input type="submit" value="Delete" />
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
</div><!-- end page -->
</body>
</html>