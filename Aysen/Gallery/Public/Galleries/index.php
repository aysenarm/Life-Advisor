<?php
require('../../../database.php');
require('../../Model/gallery.php');
require('../../Model/gallery_db.php');


if (isset($_POST['action'])) {
    $action = $_POST['action'];
} else if (isset($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'list_galleries';
}
if ($action == 'list_galleries') {
    // Get gallery and gallery data
    $galleries = galleryDB::getGalleries();

    // Display the gallery list
    include('gallery_list.php');
}
