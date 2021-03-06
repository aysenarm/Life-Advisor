<?php
require('../../../database.php');
require('../../Model/gallery.php');
require('../../Model/gallery_db.php');
require_once ('../../../view/header.php');

date_default_timezone_set('Etc/UTC');
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
require_once ('../../../view/footer.php');