<?php
class galleryDB {
    //four static method
    public static function getGalleries() {
        $db = Database::getDB();
        $query = 'SELECT * FROM gallery_galleries';
        $result = $db->query($query);
        $galleries = array();
        foreach ($result as $row) {
            $gallery = new Gallery($row['galleryName']);
            $gallery->setID($row['galleryID']);
            $gallery->setUserID($row['userID']);
            $gallery->setDatePublished($row['datePublished']);
            $gallery->setImage($row['image']);
            $galleries[] = $gallery;
        }
        return $galleries;
    }
    public static function getGallery($gallery_id) {
        $db = Database::getDB();
        $query = "SELECT * FROM gallery_galleries WHERE galleryID = '$gallery_id'";
        $result = $db->query($query);
        //convert result into array
        $row = $result->fetch();
        //cretaes gallery object
        $gallery = new Gallery($row['galleryName']);
        $gallery->setID($row['galleryID']);
        $gallery->setUserID($row['userID']);
        $gallery->setDatePublished($row['datePublished']);
        $gallery->setImage($row['image']);

        return $gallery;
    }

    public static function deleteGallery($gallery_id) {
        $db = Database::getDB();
        $query = "DELETE FROM gallery_galleries WHERE galleryID = '$gallery_id'";
        $row_count = $db->exec($query);
        return $row_count;
    }

    public static function addGallery($gallery) {
        $db = Database::getDB();
        $name = $gallery->getName();
        $userID = $gallery->getUserID();
        $datePublished = $gallery->getDatePublished();
        $image = $gallery->getImage();
        $query =
            "INSERT INTO gallery_galleries(galleryName,userID,datePublished,image)
              VALUES ('$name','$userID','$datePublished','$image')";

        $row_count = $db->exec($query);
        return $row_count;
    }

}
?>