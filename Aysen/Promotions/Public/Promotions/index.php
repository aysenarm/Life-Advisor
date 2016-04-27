<?php
require('../../../database.php');
require('../../Model/promotion.php');
require('../../Model/promotion_db.php');
require ('../../../view/header.php');

if(isset($_SESSION['user_session'])) {

    if (isset($_POST['action'])) {
        $action = $_POST['action'];
    } else if (isset($_GET['action'])) {
        $action = $_GET['action'];
    } else {
        $action = 'list_promotions';
    }
    if ($action == 'list_promotions') {
        // Get gallery and gallery data
        $promotions = promotionDB::getPromotions();;

        // Display the gallery list
        include('promotion_list.php');
    }
}
else {
    echo "<h2>We are sorry, but you have to be logged in to see this page,
please log in <a href='http://localhost/Life-Advisor/Antonio/login/View/login-form.php'>here</a></h2>";
}
require_once ('../../../view/footer.php');
