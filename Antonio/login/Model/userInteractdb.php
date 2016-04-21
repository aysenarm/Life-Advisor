<?php

require_once '../Model/dbclass.php';
session_start();
class UserDB{
    public function __construct() {

    }

    // REGISTER a new user
    public function register($uname,$umail,$upass)
    {
        try
        {
            $new_password = password_hash($upass, PASSWORD_DEFAULT);
            $db = Dbclass::getDB();
            $stmt = $db->prepare("INSERT INTO user(Username,Email,Password)
                                                       VALUES(:uname, :umail, :upass)");

            $stmt->bindparam(":uname", $uname);
            $stmt->bindparam(":umail", $umail);
            $stmt->bindparam(":upass", $new_password);
            $stmt->execute();

            return $stmt;
        }
        catch(PDOException $e)
        {
            echo $e->getMessage();
        }
    }



    // CHECK user existence
    public function check($uname,$umail)
    {
        try
        {
            $db = Dbclass::getDB();
            $stmt = $db->prepare("SELECT Username,Email FROM user WHERE
                                  Username=:uname OR
                                  Email=:umail
                                  ");
            $stmt->bindparam(":uname", $uname);
            $stmt->bindparam(":umail", $umail);
            $stmt->execute();
            $row=$stmt->fetch(PDO::FETCH_ASSOC);

            return $row;
        }
        catch(PDOException $e)
        {
            echo $e->getMessage();
        }
    }


    // LOGIN user
    public function login($uname,$umail,$upass)
    {
        try
        {
            $db = Dbclass::getDB();
            $stmt = $db->prepare("SELECT * FROM user WHERE Username=:uname OR Email=:umail LIMIT 1");
            $stmt->execute(array(':uname'=>$uname, ':umail'=>$umail));
            $userRow=$stmt->fetch(PDO::FETCH_ASSOC);

            //var_dump($userRow);
            //var_dump($stmt->rowCount());

            if($stmt->rowCount() > 0)
            {
                if(password_verify($upass, $userRow['Password']))
                {
                    $_SESSION['user_session'] = $userRow['ID_user'];
                    return true;
                }
                else
                {
                    return false;
                }
            }
        }
        catch(PDOException $e)
        {
            echo $e->getMessage();
        }
    }

    // CHECK if user is already logged in
    public function is_loggedin()
    {
        if(isset($_SESSION['user_session']))
        {
            return true;
        }
    }

    // redirection to passing page
    public function redirect($url)
    {
        header("Location: $url");
    }


}

$user = new UserDB();
var_dump($user->check("helen1","helen.boitsova@gmail.com"));