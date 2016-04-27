<?php
require('../../../database.php');
require('../../Model/image.php');
require('../../Model/image_db.php');
require ('../../Model/gallery.php');
require ('../../Model/gallery_db.php');
require_once ('../../../view/header.php');

if (isset($_GET['gallery_id'])) {
    $galleryID = $_GET['gallery_id'];
}
else{
    $galleryID = "0";
}
if (isset($_POST['action'])) {
    $action = $_POST['action'];
} else if (isset($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'list_images';
}
if ($action == 'list_images') {
    // Get gallery and gallery data
    $images = imageDB::getImagesByGallery($galleryID);
    $galleryName = galleryDB::getGallery($galleryID)->getName();


        // Display the gallery list
    include('image_list.php');
}
require_once ('../../../view/footer.php');
