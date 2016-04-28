<?php
include_once "../../../content_top.php";
require_once "../Model/cabinetdb.php";


if(isset($_SESSION['user_session'])) {

$id = $_SESSION['user_session'];

    $cabinet = new Cabinet();
    $user = $cabinet->userInfo($id);

    //var_dump($user); ?>

    <?php
    if ($user['Rights'] == 1){
        ?>
        <p style="color: red;">You have admin rights on the site</p>
        <?php
    }
    ?>
    <img src="http://localhost/Life-Advisor/Antonio/userCabinet/img/<?php echo $user['ID_image'];?>" style="width: 200px; height: 200px;">
 <h2><?php echo $user['Username'];?></h2>
    <p>Name: <?php echo $user['Name'];?></p>
    <p>Surname: <?php echo $user['Surname'];?></p>
    <p>Email: <?php echo $user['Email'];?></p>
    <p>Phone: <?php echo $user['Phone'];?></p>



    <form action="update_user_form.php" method="post" id="update_page_form">
        <input type="submit" class="btn btn-info" value="Update"/>
    </form>











<?php
}
else {
    echo "<h2>We are sorry, but you have to be logged in to see this page,
please log in <a href='http://localhost/Life-Advisor/Antonio/login/View/login-form.php'>here</a></h2>";
}
include_once "../../../content_top.php";