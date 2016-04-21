<?php
require_once '../Model/userInteractdb.php';
$user = new UserDB();

if($user->is_loggedin()!="")
{
    $user->redirect('home.php');
}


    $uname = trim($_POST['txt_uname']);
    $umail = trim($_POST['txt_umail']);
    $upass = trim($_POST['txt_upass']);

    if($uname=="") {
        $error[] = "provide username !";
        $user->redirect('../View/register-form.php?e=1');
    }
    else if($umail=="") {
        $error[] = "provide email id !";
        $user->redirect('../View/register-form.php?e=2&name='.$uname);
    }
    else if(!filter_var($umail, FILTER_VALIDATE_EMAIL)) {
        $error[] = 'Please enter a valid email address !';
        $user->redirect('../View/register-form.php?e=3&name='.$uname.'&email='.$umail);
    }
    else if($upass=="") {
        $error[] = "provide password !";
        $user->redirect('../View/register-form.php?e=4&name='.$uname.'&email='.$umail);
    }
    else if(strlen($upass) < 6){
        $error[] = "Password must be at least 6 characters";
        $user->redirect('../View/register-form.php?e=5&name='.$uname.'&email='.$umail);
    }
    else
    {
        try
        {
            $row = $user->check($uname,$umail);
            var_dump($row);
            if($row['Username']==$uname) {
                $error[] = "sorry username is already taken !";
                $user->redirect('../View/register-form.php?e=6');
            }
            else if($row['E-mail']==$umail) {
                $error[] = "sorry email is already taken !";
                $user->redirect('../View/register-form.php?e=7');
            }
            else
            {
                if($user->register($uname,$umail,$upass))
                {
                    $user->redirect('../View/register-form.php?joined');
                }
            }
        }
        catch(PDOException $e)
        {
            echo $e->getMessage();
            include('database_error.php');
        }
    }
