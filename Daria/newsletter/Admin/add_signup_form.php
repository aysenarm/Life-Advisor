<?php
require_once '../../../content_top.php';
?>

<div id="page">
    <div id="header">
        <h3>Add Subscriber</h3>
    </div>
    <div id="main">
        <form action="add_signup.php" method="post" id="add_signup_form" class="form-horizontal">

            <div class="form-group" style="margin-left: 10px;">
                <label class="col-sm-2 control-label">Email:</label>
                <div class="col-sm-10">
                    <input type="input" class="col-sm-2 form-control" name="signupemail"/>
                </div>
                <br />
            </div>

            <div class="form-group" style="margin-left: 10px;">
                <label class="col-sm-2 control-label">Date:</label>
                <div class="col-sm-10">
                    <input type="input" class="col-sm-2 form-control" name="signupdate"/>
                </div>
                <br />
            </div>

            <input style="margin-left: 10px; margin-top: 20px;" type="submit" value="Add Email Address" class="btn btn-default"/>
            <br />

        </form>
        <hr>
        <p style="margin-left: 10px;"><a href="index.php" class="btn btn-default">Back</a></p>

    </div><!-- end main -->
</div><!-- end page -->
