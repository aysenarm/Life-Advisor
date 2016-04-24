<?php
class promotionDB {
    //four static method
    public static function getPromotions() {
        $db = Database::getDB();
        $query = 'SELECT * FROM promotions';
        $result = $db->query($query);
        $promotions = array();
        foreach ($result as $row) {
            $promotion = new Promotion();
            $promotion->setImage($row['image']);
            $promotion->setDatePublished($row['datePublished']);
            $promotion->setDateValid($row['dateValid']);
            $promotion->setID($row['id']);
            $promotion->setUserID($row['userID']);
            $promotion->setKey($row['pKey']);
            $promotion->setTitle($row['title']);

            $promotions[] = $promotion;
        }
        return $promotions;
    }


    public static function getPromotion($promotion_id) {
        $db = Database::getDB();
        $query = "SELECT * FROM promotions WHERE id = '$promotion_id'";
        $result = $db->query($query);
        //convert result into array
        $row = $result->fetch();
        //creates promotion object
        $promotion = new Promotion();
        $promotion->setImage($row['image']);
        $promotion->setDatePublished($row['datePublished']);
        $promotion->setDateValid($row['dateValid']);
        $promotion->setID($row['id']);
        $promotion->setUserID($row['userID']);
        $promotion->setKey($row['pKey']);
        $promotion->setTitle($row['title']);
        return $promotion;
    }

    public static function deletePromotion($promotion_id) {
        $db = Database::getDB();
        $query = "DELETE FROM promotions WHERE id = '$promotion_id'";
        $row_count = $db->exec($query);
        return $row_count;
    }

    public static function addPromotion($promotion) {
        $db = Database::getDB();
        $image = $promotion->getImage();
        $datePublished = $promotion->getDatePublished();
        $dateValid = $promotion->getDateValid();
        $userID = $promotion->getUserID();
        $key = $promotion->getKey();
        $title = $promotion->getTitle();

        $query =
            "INSERT INTO promotions(datePublished,userID,title,pKey,image,dateValid)
              VALUES ('$datePublished','$userID','$title','$key','$image','$dateValid')";
        $row_count = $db->exec($query);
        echo "row ".$row_count;
        return $row_count;
    }

    public static function editPromotion($promotion) {
        $db = Database::getDB();
        $image = $promotion->getImage();
        $datePublished = $promotion->getDatePublished();
        $dateValid = $promotion->getDateValid();
        $userID = $promotion->getUserID();
        $key = $promotion->getKey();
        $title = $promotion->getTitle();
        $id = $promotion->getID();

        $query =
            "UPDATE promotions SET
            userID = '$userID',
            datePublished = '$datePublished',
            image = '$image',
            dateValid = '$dateValid',
            pKey = '$key',
            title = '$title'
            WHERE id = '$id'";
        $row_count = $db->exec($query);
        return $row_count;
    }

}
?>