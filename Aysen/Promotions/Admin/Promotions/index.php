<?php
require('../../../database.php');
require('../../Model/promotion.php');
require('../../Model/promotion_db.php');
require_once ('../../../view/header.php');
date_default_timezone_set('Etc/UTC');
if(isset($_SESSION['user_session'])) {

    $rez = $user->userInfo($_SESSION['user_session']);
    $_SESSION['role'] = $rez['Rights'];

    if ($_SESSION['role'] == 2){
        echo "<h2>We are sorry, but you have to be ADMIN to see this page</h2><br/>
            <a href='".$_SERVER['HTTP_REFERER']."'>Go back</a>";
    }
    else {

        if (isset($_POST['action'])) {
            $action = $_POST['action'];
        } else if (isset($_GET['action'])) {
            $action = $_GET['action'];
        } else {
            $action = 'list_promotions';
        }
        if ($action == 'list_promotions') {
            // Get promotion and promotion data
            $promotions = promotionDB::getPromotions();

            // Display the promotion list
            include('promotion_list.php');
        }
        else if ($action == 'delete_promotion') {
            // Get the IDs
            $promotion_id = $_POST['promotion_id'];
            // Delete the promotion
            promotionDB::deletePromotion($promotion_id);

            // Display the promotion List page for the current promotion
            //header("Location: .?action=list_promotions");
            echo '<script> location.replace(".?action=list_promotions");</script>';

        }
        else if ($action == 'show_add_form') {
            // echo $action;
            $promotions = promotionDB::getPromotions();
            include('promotion_add.php');
        }
        else if ($action == 'add_promotion') {

            extract($_POST);
            $errors=array();
            $extension=array("jpeg","jpg","png","gif");
            $message = 'Error uploading file';
            //echo $message;
            switch( $_FILES['cover']['error'] ) {

                case UPLOAD_ERR_OK:
                    $message = false;
                    //echo $message;
                    break;
                case UPLOAD_ERR_INI_SIZE:
                case UPLOAD_ERR_FORM_SIZE:

                    $message .= ' - file too large (limit of  bytes).';
                    //echo $message;
                    break;
                case UPLOAD_ERR_PARTIAL:
                    $message .= ' - file upload was not completed.';
                    break;
                case UPLOAD_ERR_NO_FILE:
                    $message .= ' - zero-length file uploaded.';
                    break;
                default:
                    $message .= ' - internal error #'.$_FILES['cover']['error'];
                    break;
            }
            if( !$message ) {
                if( !is_uploaded_file($_FILES['cover']['tmp_name']) ) {
                    $message = 'Error uploading file - unknown error.';
                } else {
                    $file_name=$_FILES["cover"]["name"];
                    //echo "file_name : ".$file_name."<br/>";
                    $file_tmp=$_FILES["cover"]["tmp_name"];
                    //echo "file_tmp : ".$file_tmp."<br/>";

                    $ext=pathinfo($file_name,PATHINFO_EXTENSION);
                    //echo "ext : ".$ext."<br/>";

                    if(in_array($ext,$extension))
                    {
                        $directory = "../Images/photo_gallery";
                        if(!is_dir($directory))
                        {
                            //echo "create dir phptp gallery";
                            mkdir($directory);
                        }

                        if(!file_exists("../Images/photo_gallery/".$file_name))
                        {
                            //echo "file not exist";
                            move_uploaded_file($file_tmp=$_FILES["cover"]["tmp_name"],"../Images/photo_gallery/".$file_name);
                        }
                        else
                        {
                            //echo "file exist";
                            $filename=basename($file_name,$ext);
                            $file_name=$filename.time().".".$ext;
                            move_uploaded_file($file_tmp=$_FILES["cover"]["tmp_name"],"../Images/photo_gallery/".$file_name);
                        }
                    }
                    else
                    {
                        array_push($errors,"$file_name, ");
                    }
                    if(count($errors)!= 0){
                        $error = "Invalid image data. Check all fields and try again.";
                        include('../../../errors/error.php');
                    }

                    $title = $_POST['title'];
                    $valid = $_POST['valid'];
                    $key = $_POST['key'];
                    //echo $key.$valid.$title;
                    // Validate the inputs
                    if ( empty($title)||empty($valid)||empty($key)) {
                        $error = "Invalid promotion data. Check all fields and try again.";
                        include('../../../errors/error.php');
                    } else {
                        $today = date("Y-m-d");
                        $datePublished = $today;
                        $userID = "1";
                        $promotion = new Promotion();
                        $promotion->setUserID($userID);
                        $promotion->setDatePublished($datePublished);
                        $promotion->setTitle($title);
                        $promotion->setDateValid($valid);
                        $promotion->setKey($key);
                        $promotion->setImage($file_name);
                        promotionDB::addPromotion($promotion);

                        // Display the gallery List page for the current gallery
                       // header("Location: .?");
                        echo '<script> location.replace(".?action=list_promotions");</script>';

                    }
                }
            }
            else{
                $error = $message;
                include('../../../errors/error.php');
            }

        }

        else if ($action == 'show_edit_form') {
            $promotions = promotionDB::getPromotions();
            $promotion_id = $_POST['promotion_id'];
            $promotion = promotionDB::getPromotion($promotion_id);
            include('promotion_edit.php');
        }
        else if ($action == 'edit_promotion') {
            extract($_POST);
            $errors=array();
            $extension=array("jpeg","jpg","png","gif");
            $message = 'Error uploading file';
            //var_dump($_POST);
            //var_dump($_FILES);
            //echo $message;
            switch( $_FILES['cover']['error'] ) {

                case UPLOAD_ERR_OK:
                    $message = false;
                    //echo $message;
                    break;
                case UPLOAD_ERR_INI_SIZE:
                case UPLOAD_ERR_FORM_SIZE:

                    $message .= ' - file too large (limit of  bytes).';
                    //echo $message;
                    break;
                case UPLOAD_ERR_PARTIAL:
                    $message .= ' - file upload was not completed.';
                    break;
                case UPLOAD_ERR_NO_FILE:
                    $message .= ' - zero-length file uploaded.';
                    break;
                default:
                    $message .= ' - internal error #'.$_FILES['cover']['error'];
                    break;
            }
            if( !$message ) {
                if( !is_uploaded_file($_FILES['cover']['tmp_name']) ) {
                    $message = 'Error uploading file - unknown error.';
                } else {
                    $file_name=$_FILES["cover"]["name"];
                    //echo "file_name : ".$file_name."<br/>";
                    $file_tmp=$_FILES["cover"]["tmp_name"];
                    //echo "file_tmp : ".$file_tmp."<br/>";

                    $ext=pathinfo($file_name,PATHINFO_EXTENSION);
                    //echo "ext : ".$ext."<br/>";

                    if(in_array($ext,$extension))
                    {
                        $directory = "../Images/photo_gallery";
                        if(!is_dir($directory))
                        {
                            //echo "create dir phptp gallery";
                            mkdir($directory);
                        }

                        if(!file_exists("../Images/photo_gallery/".$file_name))
                        {
                            //echo "file not exist";
                            move_uploaded_file($file_tmp=$_FILES["cover"]["tmp_name"],"../Images/photo_gallery/".$file_name);
                        }
                        else
                        {
                            //echo "file exist";
                            $filename=basename($file_name,$ext);
                            $file_name=$filename.time().".".$ext;
                            move_uploaded_file($file_tmp=$_FILES["cover"]["tmp_name"],"../Images/photo_gallery/".$file_name);
                        }
                    }
                    else
                    {
                        array_push($errors,"$file_name, ");
                    }
                    if(count($errors)!= 0){
                        $error = "Invalid image data. Check all fields and try again.";
                        include('../../../errors/error.php');
                    }

                    $title = $_POST['title'];
                    $valid = $_POST['valid'];
                    $key = $_POST['key'];
                    $edit = $_POST['edited_promotion_id'];
                    //echo $key.$valid.$title;
                    // Validate the inputs
                    if ( empty($title)||empty($valid)||empty($key)) {
                        $error = "Invalid promotion data. Check all fields and try again.";
                        include('../../../errors/error.php');
                    } else {
                        $today = date("Y-m-d");
                        $datePublished = $today;
                        $userID = "1";
                        $promotion = new Promotion();
                        $promotion->setID($edit);
                        $promotion->setUserID($userID);
                        $promotion->setDatePublished($datePublished);
                        $promotion->setTitle($title);
                        $promotion->setDateValid($valid);
                        $promotion->setKey($key);
                        $promotion->setImage($file_name);
                        promotionDB::editPromotion($promotion);

                        // Display the gallery List page for the current gallery
                        //header("Location: .?");
                        echo '<script> location.replace(".?action=list_promotions");</script>';

                    }
                }
            }
            else{
                $error = $message;
                include('../../../errors/error.php');
            }
        }
        else if ($action == 'show_detail_form') {
            //echo $action;
            $promotions = promotionDB::getPromotions();

            $promotion_id = $_POST['promotion_id'];
            $promotion = promotionDB::getPromotion($promotion_id);

            include('promotion_detail.php');
        }

    }
}
else {
    echo "<h2>We are sorry, but you have to be logged in to see this page,
please log in <a href='http://life-adviser.hryshkova.com/Life-Advisor/Antonio/login/View/login-form.php'>here</a></h2>";
}
require_once ('../../../view/footer.php');
?>