<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<!-- the head section -->
<head>
</head>

<!-- the body section -->
<body>
<?php require_once '../../../content_top.php'; ?>

<title>DB error</title>

    <div id="page">


        <div id="main">
            <h1>Database Error</h1>
            <p>There was an error connecting to the database.</p>
            <p>The database must be installed as described in the appendix.</p>
            <p>MySQL must be running as described in chapter 1.</p>
            <p>Error message: <?php echo $error_message; ?></p>
            <p>&nbsp;</p>
        </div><!-- end main -->



    </div><!-- end page -->
<?php require_once '../../../content_bottom.php'; ?>
</body>
</html>