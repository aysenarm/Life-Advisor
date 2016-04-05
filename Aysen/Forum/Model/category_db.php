<?php
class categoryDB {
    //four static method
    public static function getCategories() {
        $db = Database::getDB();
        $query = 'SELECT * FROM forum_categories';
        $result = $db->query($query);
        $categories = array();
        foreach ($result as $row) {
            $category = new Category($row['categoryName']);
            $category->setID($row['categoryID']);
            $category->setUserID($row['userID']);
            $category->setDatePublished($row['datePublished']);
            $categories[] = $category;
        }
        return $categories;
    }
    public static function getCategory($category_id) {
        $db = Database::getDB();
        $query = "SELECT * FROM forum_categories WHERE categoryID = '$category_id'";
        $result = $db->query($query);
        //convert result into array
        $row = $result->fetch();
        //cretaes category object
        $category = new Category($row['categoryName']);
        $category->setID($row['categoryID']);
        $category->setUserID($row['userID']);
        $category->setDatePublished($row['datePublished']);
        return $category;
    }

    public static function deleteCategory($category_id) {
        $db = Database::getDB();
        $query = "DELETE FROM forum_categories WHERE categoryID = '$category_id'";
        $row_count = $db->exec($query);
        return $row_count;
    }

    public static function addCategory($category) {
        $db = Database::getDB();
        $name = $category->getName();
        $datePublished = $category->getDatePublished();
        $userID = $category->getUserID();
        $query =
            "INSERT INTO forum_categories(categoryName,userID,datePublished)VALUES ('$name','$userID','$datePublished')";

        $row_count = $db->exec($query);
        return $row_count;
    }
    public static function editCategory($category) {
        $db = Database::getDB();

        $category_id = $category->getID();
        $name = $category->getName();
        $datePublished = $category->getDatePublished();
        $userID = $category->getUserID();
        $query =
            "UPDATE forum_categories SET categoryID ='$category_id', categoryName = '$name',userID = '$userID',datePublished = '$datePublished' WHERE categoryID = '$category_id'";
        $row_count = $db->exec($query);
        return $row_count;
    }
}
?>