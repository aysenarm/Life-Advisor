<?php session_start();
?>
<p> Hello, <?php echo $_SESSION['user_session'];?>! </p>
<a href="../Controller/logout.php">Log out</a>