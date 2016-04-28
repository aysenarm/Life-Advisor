<?php session_start(); ?>
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


    // function to UPDATE a page

    public function updateUser($id , $name, $surname, $rights, $password, $username, $email, $phone, $){
        $db = Dbclass::getDB();
        $query = "UPDATE page
                    SET
                    Title = :tit,
                    ID_user = :usr,
                    Status = :stat,
                    Content = :cont,
                    Tags = :tags,
                    Menu = :menu,
                    ID_image = :im
                      WHERE ID_page = :id
                 ";
        $stm = $db->prepare($query);
        $stm->bindParam(':id', $id);
        $stm->bindValue(':tit', $title, PDO::PARAM_STR);
        $stm->bindValue(':usr', $idUser, PDO::PARAM_INT);
        $stm->bindValue(':stat', $status, PDO::PARAM_STR);
        $stm->bindValue(':cont', $content, PDO::PARAM_STR);
        $stm->bindValue(':tags', $tags, PDO::PARAM_STR);
        $stm->bindValue(':menu', $menu, PDO::PARAM_STR);
        $stm->bindValue(':im', $idImage, PDO::PARAM_INT);

        $count = $stm->execute();
        return "Updated rows: " . $count;
    }




}
