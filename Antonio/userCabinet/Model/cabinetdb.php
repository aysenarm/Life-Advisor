<?php
require_once 'dbclass.php';

class Cabinet{
    public function __construct() {

    }

    // select ONE user by it's ID
    public function userInfo($id)
    {
        try
        {
            $db = Dbclass::getDB();
            $stmt = $db->prepare("SELECT * FROM user WHERE
                                  ID_user = :id
                                  ");
            $stmt->bindparam(":id", $id);
            $stmt->execute();
            $row=$stmt->fetch(PDO::FETCH_ASSOC);

            return $row;
        }
        catch(PDOException $e)
        {
            echo $e->getMessage();
            include('database_error.php');
        }
    }



    // function to DELETE a user
    public function deleteUser($id){

        $db = Dbclass::getDB();
        $query = "DELETE FROM user
                      WHERE ID_user = :id ";
        $stm = $db->prepare($query);
        $stm->bindParam(':id', $id);

        $count = $stm->execute();

        return "Deleted roWs: " . $count;

    }


    // function to UPDATE a user

    public function updateUser($id , $name, $surname, $rights, $password, $username, $email, $phone, $idImage){
        $db = Dbclass::getDB();
        $query = "UPDATE user
                    SET
                    Name = :name,
                    Surname = :surname,
                    Rights = :rights,
                    Password = :pass,
                    Username = :username,
                    Email = :email,
                    Phone = :phone,
                    ID_image = :im
                      WHERE ID_user = :id
                 ";
        $stm = $db->prepare($query);
        $stm->bindParam(':id', $id);
        $stm->bindValue(':name', $name, PDO::PARAM_STR);
        $stm->bindValue(':surname', $surname, PDO::PARAM_STR);
        $stm->bindValue(':rights', $rights, PDO::PARAM_STR);
        $stm->bindValue(':pass', $password, PDO::PARAM_STR);
        $stm->bindValue(':username', $username, PDO::PARAM_STR);
        $stm->bindValue(':email', $email, PDO::PARAM_STR);
        $stm->bindValue(':phone', $phone, PDO::PARAM_STR);
        $stm->bindValue(':im', $idImage, PDO::PARAM_STR);

        $count = $stm->execute();
        return "Updated rows: " . $count;
    }



    // function to UPDATE a user - from User Cabinet

    public function updateUserSm($id , $name, $surname, $username, $email, $phone, $idImage){
        $db = Dbclass::getDB();
        $query = "UPDATE user
                    SET
                    Name = :name,
                    Surname = :surname,
                    Username = :username,
                    Email = :email,
                    Phone = :phone,
                    ID_image = :im
                      WHERE ID_user = :id
                 ";
        $stm = $db->prepare($query);
        $stm->bindParam(':id', $id);
        $stm->bindValue(':name', $name, PDO::PARAM_STR);
        $stm->bindValue(':surname', $surname, PDO::PARAM_STR);
        $stm->bindValue(':username', $username, PDO::PARAM_STR);
        $stm->bindValue(':email', $email, PDO::PARAM_STR);
        $stm->bindValue(':phone', $phone, PDO::PARAM_STR);
        $stm->bindValue(':im', $idImage, PDO::PARAM_STR);

        $count = $stm->execute();
        return "Updated rows: " . $count;
    }


    // function to UPDATE a user - from User Cabinet NO IMAGE

    public function updateUserSmNoImage($id , $name, $surname, $username, $email, $phone){
        $db = Dbclass::getDB();
        $query = "UPDATE user
                    SET
                    Name = :name,
                    Surname = :surname,
                    Username = :username,
                    Email = :email,
                    Phone = :phone
                      WHERE ID_user = :id
                 ";
        $stm = $db->prepare($query);
        $stm->bindParam(':id', $id);
        $stm->bindValue(':name', $name, PDO::PARAM_STR);
        $stm->bindValue(':surname', $surname, PDO::PARAM_STR);
        $stm->bindValue(':username', $username, PDO::PARAM_STR);
        $stm->bindValue(':email', $email, PDO::PARAM_STR);
        $stm->bindValue(':phone', $phone, PDO::PARAM_STR);

        $count = $stm->execute();
        return "Updated rows: " . $count;
    }



    //function to select all users

    public function listUsers(){
        $db = Dbclass::getDB();
        $query = "SELECT * FROM user
              ORDER BY ID_user";
        return $db->query($query);
    }




}
