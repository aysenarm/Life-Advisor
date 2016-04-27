<?php
require('../../../database.php');
require('../../Model/gallery.php');
require('../../Model/gallery_db.php');
require_once ('../../../view/header.php');
if(isset($_SESSION['user_session'])) {
    $rez = $user->userInfo($_SESSION['user_session']);
    $_SESSION['role'] = $rez['Rights'];
    echo $_SESSION['role'];
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
            $action = 'list_galleries';
        }
        if ($action == 'list_galleries') {
            // Get gallery and gallery data
            $galleries = galleryDB::getGalleries();

            // Display the gallery list
            include('gallery_list.php');
        }
        else if ($action == 'delete_gallery') {
            // Get the IDs
            $gallery_id = $_POST['gallery_id'];
            // Delete the gallery
            galleryDB::deleteGallery($gallery_id);

            // Display the gallery List page for the current gallery
            header("Location: .?");
        }
        else if ($action == 'show_add_form') {
            //echo $action;
            $galleries = galleryDB::getGalleries();
            include('gallery_add.php');
        }
        else if ($action == 'add_gallery') {
            // $name = $_POST['name'];
            //$alt = $_POST['name'];
            //var_dump($_FILES);
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
                }

                // Validate the inputs
                if ( empty($name)) {
                    $error = "Invalid image data. Check all fields and try again.";
                    include('../../../errors/error.php');
                } else {
                    $name = $_POST['name'];
                    $today = date("Y-m-d");
                    $datePublished = $today;
                    $userID = "1";
                    // Validate the inputs
                    if ( empty($name)) {
                        $error = "Invalid gallery data. Check all fields and try again.";
                        include('../../../errors/error.php');
                    } else {
                        $gallery = new Gallery($_POST['name']);
                        $gallery->setUserID($userID);
                        $gallery->setDatePublished($datePublished);
                        $gallery->setImage($file_name);
                        galleryDB::addGallery($gallery);

                        // Display the gallery List page for the current gallery
                        header("Location: .?");
                    }
                }
            }
            else{
                $error = $message;
                include('../../../errors/error.php');
            }
        }
    }
}
else {
    echo "<h2>We are sorry, but you have to be logged in to see this page,
please log in <a href='http://localhost/Life-Advisor/Antonio/login/View/login-form.php'>here</a></h2>";
}
require_once ('../../../view/footer.php');
?>