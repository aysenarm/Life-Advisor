<?php
require('../../../database.php');
require('../../Model/category.php');
require('../../Model/category_db.php');
require_once ('../../../view/header.php');
if (isset($_POST['action'])) {
    $action = $_POST['action'];
} else if (isset($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'list_categories';
}
if ($action == 'list_categories') {
    // Get category and category data
    $categories = categoryDB::getCategories();
    // Display the category list
    include('category_list.php');
}
require_once ('../../../view/footer.php');
?>