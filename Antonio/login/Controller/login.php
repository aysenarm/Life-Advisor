<?php
require_once '../Model/userInteractdb.php';
$user = new UserDB();

if($user->is_loggedin()!="")
{
    $user->redirect("http://localhost/Life-Advisor/");
}
    $uname = $_POST['txt_uname_email'];
    $umail = $_POST['txt_uname_email'];
    $upass = $_POST['txt_password'];

    if($user->login($uname,$umail,$upass))
    {
        $user->redirect($_SERVER['HTTP_REFERER']);
    }
    else
    {
        $error = "Wrong Details!";
        $user->redirect('../View/login-form.php?e=1');
    }
