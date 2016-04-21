<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Sign up</title>
    <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css" type="text/css"  />
    <link rel="stylesheet" href="style.css" type="text/css"  />
</head>
<body>
<div class="container">
    <div class="form-container">
        <form method="post" action="../Controller/register.php">
            <h2>Sign up.</h2><hr />
            <?php
            if(isset($_GET["e"]))
            {
                if ($_GET['e'] == 1){
                    ?>
                    <div class="alert alert-danger">
                        <i class="glyphicon glyphicon-warning-sign"></i> &nbsp; provide username !
                    </div>
                  <?php
                }
                elseif ($_GET['e'] == 2){
                    ?>
                    <div class="alert alert-danger">
                        <i class="glyphicon glyphicon-warning-sign"></i> &nbsp; provide email id !
                    </div>
                    <?php
                }
                elseif ($_GET['e'] == 3){
                    ?>
                    <div class="alert alert-danger">
                        <i class="glyphicon glyphicon-warning-sign"></i> &nbsp; Please enter a valid email address !
                    </div>
                    <?php
                }
                elseif ($_GET['e'] == 4){
                    ?>
                    <div class="alert alert-danger">
                        <i class="glyphicon glyphicon-warning-sign"></i> &nbsp; provide password !
                    </div>
                    <?php
                }
                elseif ($_GET['e'] == 5){
                    ?>
                    <div class="alert alert-danger">
                        <i class="glyphicon glyphicon-warning-sign"></i> &nbsp; Password must be atleast 6 characters
                    </div>
                    <?php
                }
                elseif ($_GET['e'] == 6){
                    ?>
                    <div class="alert alert-danger">
                        <i class="glyphicon glyphicon-warning-sign"></i> &nbsp; sorry username already taken !
                    </div>
                    <?php
                }
                elseif ($_GET['e'] == 7){
                    ?>
                    <div class="alert alert-danger">
                        <i class="glyphicon glyphicon-warning-sign"></i> &nbsp; sorry email id already taken !
                    </div>
                    <?php
                }
            }
            else if(isset($_GET['joined']))
            {
                ?>
                <div class="alert alert-info">
                    <i class="glyphicon glyphicon-log-in"></i> &nbsp; Successfully registered <a href='login-form.php'>login</a> here
                </div>
                <?php
            }
            ?>
            <div class="form-group">
                <input type="text" class="form-control" name="txt_uname" placeholder="Enter Username" value="<?php if(isset($_GET['name'])){echo $_GET['name'];}?>" />
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="txt_umail" placeholder="Enter E-Mail" value="<?php if(isset($_GET['email'])){echo $_GET['email'];}?>" />
            </div>
            <div class="form-group">
                <input type="password" class="form-control" name="txt_upass" placeholder="Enter Password" />
            </div>
            <div class="clearfix"></div><hr />
            <div class="form-group">
                <button type="submit" class="btn btn-block btn-primary" name="btn-signup">
                    <i class="glyphicon glyphicon-open-file"></i>&nbsp;SIGN UP
                </button>
            </div>
            <br />
        </form>
    </div>
</div>

</body>
</html>