<?php
require('../../../database.php');
require('../../Model/category.php');
require('../../Model/category_db.php');
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
else if ($action == 'delete_category') {
    // Get the IDs
    $category_id = $_POST['category_id'];
    // Delete the category
    categoryDB::deleteCategory($category_id);

    // Display the category List page for the current category
    header("Location: .?action=list_categories");
}
else if ($action == 'show_add_form') {
   // echo $action;
    $categories = categoryDB::getCategories();
    include('category_add.php');
}
else if ($action == 'add_category') {
    $name = $_POST['name'];
    // Validate the inputs
    if ( empty($name)) {
        $error = "Invalid category data. Check all fields and try again.";
        include('../../../errors/error.php');
    } else {
        $category = new Category($_POST['name']);
        $category->setUserID("1");
        $today = date("Y-m-d");
        $category->setDatePublished($today);
        categoryDB::addCategory($category);

        // Display the category List page for the current category
        header("Location: .?action=list_categories");
    }
}
else if ($action == 'show_edit_form') {
    $categories = categoryDB::getCategories();
    $category_id = $_POST['category_id'];
    $category = categoryDB::getCategory($category_id);
    include('category_edit.php');
}
else if ($action == 'edit_category') {
    $name = $_POST['name'];
    $edited_category_id = $_POST['edited_category_id'];
    // Validate the inputs
    if ( empty($name)) {
        $error = "Invalid category data. Check all fields and try again.";
        include('../../../errors/error.php');
    } else {
        $category = new category($name);
        $category->setID($edited_category_id);
        $category->setUserID("1");
        $today = date("Y-m-d");
        $category->setDatePublished($today);
        categoryDB::editCategory($category);
        // Display the category List page for the current category
        header("Location: .?action=list_categories");
    }
}
else if ($action == 'show_detail_form') {
    //echo $action;
    $categories = categoryDB::getCategories();

    $category_id = $_POST['category_id'];
    $category = categoryDB::getCategory($category_id);

    include('category_detail.php');
}
?>