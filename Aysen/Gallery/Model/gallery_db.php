<?php
class galleryDB {
    //four static method
    public static function getGalleries() {
        $db = Database::getDB();
        $query = 'SELECT * FROM forum_galleries';
        $result = $db->query($query);
        $galleries = array();
        foreach ($result as $row) {
            $gallery = new Gallery($row['galleryName']);
            $gallery->setID($row['galleryID']);
            $galleries[] = $gallery;
        }
        return $galleries;
    }
    public static function getGallery($gallery_id) {
        $db = Database::getDB();
        $query = "SELECT * FROM forum_galleries WHERE galleryID = '$gallery_id'";
        $result = $db->query($query);
        //convert result into array
        $row = $result->fetch();
        //cretaes gallery object
        $gallery = new Gallery($row['galleryName']);
        $gallery->setID($row['galleryID']);
        return $gallery;
    }

    public static function deleteGallery($gallery_id) {
        $db = Database::getDB();
        $query = "DELETE FROM forum_galleries WHERE galleryID = '$gallery_id'";
        $row_count = $db->exec($query);
        return $row_count;
    }

    public static function addGallery($gallery) {
        $db = Database::getDB();
        $name = $gallery->getName();
        $query =
            "INSERT INTO forum_galleries(galleryName)VALUES ('$name')";

        $row_count = $db->exec($query);
        return $row_count;
    }
    public static function editGallery($gallery) {
        $db = Database::getDB();

        $gallery_id = $gallery->getID();
        $name = $gallery->getName();
        $query =
            "UPDATE forum_galleries SET galleryID ='$gallery_id', galleryName = '$name' WHERE galleryID = '$gallery_id'";
        $row_count = $db->exec($query);
        return $row_count;
    }
}
?>