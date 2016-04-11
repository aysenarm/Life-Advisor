<?php
class imageDB {
    //four static method
    public static function getImages() {
        $db = Database::getDB();
        $query = 'SELECT * FROM forum_images';
        $result = $db->query($query);
        $images = array();
        foreach ($result as $row) {
            $image = new Image($row['imageName']);
            $image->setID($row['imageID']);
            $images[] = $image;
        }
        return $images;
    }
    public static function getImage($image_id) {
        $db = Database::getDB();
        $query = "SELECT * FROM forum_images WHERE imageID = '$image_id'";
        $result = $db->query($query);
        //convert result into array
        $row = $result->fetch();
        //cretaes image object
        $image = new Image($row['imageName']);
        $image->setID($row['imageID']);
        return $image;
    }

    public static function deleteImage($image_id) {
        $db = Database::getDB();
        $query = "DELETE FROM forum_images WHERE imageID = '$image_id'";
        $row_count = $db->exec($query);
        return $row_count;
    }

    public static function addImage($image) {
        $db = Database::getDB();
        $name = $image->getName();
        $query =
            "INSERT INTO forum_images(imageName)VALUES ('$name')";

        $row_count = $db->exec($query);
        return $row_count;
    }
    public static function editImage($image) {
        $db = Database::getDB();

        $image_id = $image->getID();
        $name = $image->getName();
        $query =
            "UPDATE forum_images SET imageID ='$image_id', imageName = '$name' WHERE imageID = '$image_id'";
        $row_count = $db->exec($query);
        return $row_count;
    }
}
?>