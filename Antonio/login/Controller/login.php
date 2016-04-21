<?php
require_once '../Model/userInteractdb.php';
$user = new UserDB();

if($user->is_loggedin()!="")
{
    $user->redirect('home.php');
}
    $uname = $_POST['txt_uname_email'];
    $umail = $_POST['txt_uname_email'];
    $upass = $_POST['txt_password'];

    if($user->login($uname,$umail,$upass))
    {
        $user->redirect('../View/home.php');
    }
    else
    {
        $error = "Wrong Details!";
        $user->redirect('../View/login-form.php?e=1');
    }
