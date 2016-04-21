<?php

include_once ("../Model/userInteractdb.php");
$user = new UserDB();

if(isset($_SESSION['user_session'])){
$rez = $user->userInfo($_SESSION['user_session']);
    //echo $rez['Rights'];
    $_SESSION['role'] = $rez['Rights'];
   // echo $_SESSION['role'];
}
else {
$user->redirect("../View/login-form.php");
}