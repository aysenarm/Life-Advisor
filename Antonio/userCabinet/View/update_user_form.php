<?php
include_once "../../../content_top.php";
require_once('../Model/cabinetdb.php');

if(isset($_SESSION['user_session'])) {

$id = $_SESSION['user_session'];

$cabinet = new Cabinet();
$user = $cabinet->userInfo($id);

?>

<h1>Update Profile</h1>
<form action="../Controller/update_user.php" method="post" class="form-horizontal" enctype="multipart/form-data">
    <div class="form-group" style="margin-left: 10px;">
        <input type="hidden" name="id" value="<?php echo $id; ?>"/>
    </div>

    <div class="form-group" style="margin-left: 10px;">
        <label class="col-sm-2 control-label">Name:</label>
        <div class="col-sm-10">
            <input type="input" class="col-sm-2 form-control" name="name" value="<?php echo $user['Name']; ?>"/>
        </div>
        <br />
    </div>

    <div class="form-group" style="margin-left: 10px;">
        <label class="col-sm-2 control-label">Surname:</label>
        <div class="col-sm-10">
            <input type="input" class="col-sm-2 form-control" name="surname" value="<?php echo $user['Surname']; ?>"/>
        </div>
        <br />
    </div>

    <div class="form-group" style="margin-left: 10px;">
        <label class="col-sm-2 control-label">Username:</label>
        <div class="col-sm-10">
            <input type="input" class="col-sm-2 form-control" name="username" value="<?php echo $user['Username']; ?>"/>
        </div>
        <br />
    </div>

    <div class="form-group" style="margin-left: 10px;">
        <label class="col-sm-2 control-label">Email:</label>
        <div class="col-sm-10">
            <input type="input" class="col-sm-2 form-control" name="email" value="<?php echo $user['Email']; ?>" />
        </div>
        <br />
    </div>


    <div class="form-group" style="margin-left: 10px;">
        <label class="col-sm-2 control-label">Phone:</label>
        <div class="col-sm-10">
            <input type="input" class="col-sm-2 form-control" name="phone" value="<?php echo $user['Phone']; ?>" />
        </div>
        <br />
    </div>


    <div class="form-group" style="margin-left: 10px;">
        <p>Picture attached now: <?php echo $user['ID_image']; ?></p>
        <label>Upload a new main picture:</label>
        <input type="file" name="image"><br>
    </div>


    <label class="control-label">&nbsp;</label>
    <input type="submit" class="btn btn-success" value="Update" />
    <br />

</form>
<br />
<p><a href="userCabinet.php" class="btn btn-primary">Back</a></p>

<?php
}
else {
    echo "<h2>We are sorry, but you have to be logged in to see this page,
please log in <a href='http://localhost/Life-Advisor/Antonio/login/View/login-form.php'>here</a></h2>";
}

require_once '../../../content_bottom.php'; ?>
</body>
</html>

