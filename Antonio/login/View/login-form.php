<?php
require_once '../Model/userInteractdb.php';
$user = new UserDB();
if($user->is_loggedin()!="")
{
$user->redirect('http://localhost/Life-Advisor/');
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Login</title>
        <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css" type="text/css"  />
        <link rel="stylesheet" href="style.css" type="text/css"  />
    </head>
    <body>
        <div class="container">
            <div class="form-container">
                <form method="post" action="../Controller/login.php">
                    <h2>Sign in.</h2><hr />
                    <?php

                    if(isset($_GET["e"])) {
                        if ($_GET['e'] == 1) {
                            ?>
                            <div class="alert alert-danger">
                                <i class="glyphicon glyphicon-warning-sign"></i> &nbsp; Wrong Details!
                            </div>
                            <?php
                            unset($_GET);
                        }
                    }
                    ?>
                    <div class="form-group">
                        <input type="text" class="form-control" name="txt_uname_email" placeholder="Username or Email ID" required />
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="txt_password" placeholder="Your Password" required />
                    </div>
                    <div class="clearfix"></div><hr />
                    <div class="form-group">
                        <button type="submit" name="btn-login" class="btn btn-block btn-primary">
                            <i class="glyphicon glyphicon-log-in"></i>&nbsp;SIGN IN
                        </button>
                    </div>
                    <br />
                    <label>Don't have account yet ! <a href="register-form.php">Sign Up</a></label>
                </form>
            </div>
        </div>

    </body>
</html>