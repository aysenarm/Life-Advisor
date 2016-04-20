<?php
class imageDB {
    //four static method
    public static function getImages() {
        $db = Database::getDB();
        $query = 'SELECT * FROM gallery_images';
        $result = $db->query($query);
        $images = array();
        foreach ($result as $row) {
            $image = new Image($row['fileName']);
            $image->setID($row['imageID']);
            $image->setDatePublished($row['datePublished']);
            $image->setUserID($row['userID']);
            $image->setGalleryID($row['galleryID']);
            $image->setAlt($row['alt']);
            $images[] = $image;
        }
        return $images;
    }
    public static function getImagesByGallery($galleryID) {
        $db = Database::getDB();
        $query = 'SELECT * FROM gallery_images WHERE galleryID = '.$galleryID;
        $result = $db->query($query);
        $images = array();
        foreach ($result as $row) {
            $image = new Image($row['fileName']);
            $image->setID($row['imageID']);
            $image->setDatePublished($row['datePublished']);
            $image->setUserID($row['userID']);
            $image->setGalleryID($row['galleryID']);
            $image->setAlt($row['alt']);
            $images[] = $image;
        }
        return $images;
    }

    public static function getImage($image_id) {
        $db = Database::getDB();
        $query = "SELECT * FROM gallery_images WHERE imageID = '$image_id'";
        $result = $db->query($query);
        //convert result into array
        $row = $result->fetch();
        //cretaes image object
        $image = new Image($row['fileName']);
        $image->setID($row['imageID']);
        $image->setDatePublished($row['datePublished']);
        $image->setUserID($row['userID']);
        $image->setGalleryID($row['galleryID']);
        $image->setAlt($row['alt']);
        return $image;
    }

    public static function deleteImage($image_id) {
        $db = Database::getDB();
        $query = "DELETE FROM gallery_images WHERE imageID = '$image_id'";
        $row_count = $db->exec($query);
        return $row_count;
    }

    public static function addImage($image) {
        $db = Database::getDB();
        $name = $image->getName();
        $datePublished = $image->getDatePublished();
        $userID = $image->getUserID();
        $galleryID = $image->getGalleryID();
        $alt = $image->getAlt();
        $query =
            "INSERT INTO gallery_images(fileName,datePublished,userID,galleryID,alt)
              VALUES ('$name','$datePublished','$userID','$galleryID','$alt')";

        $row_count = $db->exec($query);
        return $row_count;
    }

}
?>