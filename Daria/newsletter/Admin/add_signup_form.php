<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<!-- the head section -->
<head>
    <title>Add Subscriber</title>
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
</body>
</html>