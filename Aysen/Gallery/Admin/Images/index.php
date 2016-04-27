<?php
require('../../../database.php');
require('../../Model/image.php');
require('../../Model/image_db.php');
require ('../../Model/gallery.php');
require ('../../Model/gallery_db.php');
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
            $action = 'list_images';
        }
        if (isset($_GET['gallery_id'])) {
            $galleryID = $_GET['gallery_id'];
        }
        else{
            $galleryID = "0";
        }
        if ($action == 'list_images') {
            // Get image and image data
            $images = imageDB::getImagesByGallery($galleryID);
            $gallery = galleryDB::getGallery($galleryID);
            // Display the image list
            include('image_list.php');
        }
        else if ($action == 'delete_image') {
            // Get the IDs
            $image_id = $_POST['image_id'];
            // Delete the image
            imageDB::deleteImage($image_id);

            // Display the image List page for the current image
            header("Location: .?gallery_id=".$galleryID);
        }
        else if ($action == 'show_add_form') {
            //echo $action;
            $images = imageDB::getImages();
            $gallery = galleryDB::getGallery($galleryID);
            //echo $galleryID;
            include('image_add.php');
        }
        else if ($action == 'add_image') {
            $name = $_POST['name'];
            $alt = $_POST['name'];
            extract($_POST);
            $errors=array();
            $extension=array("jpeg","jpg","png","gif");
            foreach($_FILES["fileToUpload"]["tmp_name"] as $key=>$tmp_name)
            {
                //echo "inside";
                $message = 'Error uploading file';
                //echo $message;
                switch( $_FILES['fileToUpload']['error'][$key] ) {

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
                        $message .= ' - internal error #'.$_FILES['fileToUpload']['error'][$key];
                        break;
                }
                if( !$message ) {
                    if( !is_uploaded_file($_FILES['fileToUpload']['tmp_name'][$key]) ) {
                        $message = 'Error uploading file - unknown error.';
                    } else {
                        $file_name=$_FILES["fileToUpload"]["name"][$key];
                        //echo "file_name : ".$file_name."<br/>";
                        $file_tmp=$_FILES["fileToUpload"]["tmp_name"][$key];
                        //echo "file_tmp : ".$file_tmp."<br/>";

                        $ext=pathinfo($file_name,PATHINFO_EXTENSION);
                        //echo "ext : ".$ext."<br/>";

                        if(in_array($ext,$extension))
                        {
                            $directory = "photo_gallery";
                            if(!is_dir($directory))
                            {
                                //echo "create dir phptp gallery";
                                mkdir($directory);
                            }

                            if(!is_dir("photo_gallery/".$galleryID))
                            {
                                //echo "create dir gallery id";
                                mkdir("photo_gallery/".$galleryID);
                            }

                            if(!file_exists("photo_gallery/".$galleryID."/".$file_name))
                            {
                                //echo "file not exist";
                                move_uploaded_file($file_tmp=$_FILES["fileToUpload"]["tmp_name"][$key],"photo_gallery/".$galleryID."/".$file_name);
                            }
                            else
                            {
                                //echo "file exist";
                                $filename=basename($file_name,$ext);
                                $file_name=$filename.time().".".$ext;
                                move_uploaded_file($file_tmp=$_FILES["fileToUpload"]["tmp_name"][$key],"photo_gallery/".$galleryID."/".$file_name);
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
                        $image = new Image($file_name);
                        $today = date("Y-m-d");
                        $userID = "1";
                        $image->setDatePublished($today);
                        $image->setUserID($userID);
                        $image->setGalleryID($galleryID);
                        $image->setAlt($name);
                        imageDB::addImage($image);

                        // Display the image List page for the current image
                        header("Location: .?gallery_id=".$galleryID);
                    }
                }
                else{
                    $error = $message;
                    include('../../../errors/error.php');
                }



            }
        }

        else if ($action == 'show_detail_form') {
            //echo $action;
            $images = imageDB::getImages();

            $image_id = $_POST['image_id'];
            $image = imageDB::getImage($image_id);
            $gallery = galleryDB::getGallery($galleryID);
            include('image_detail.php');

        }
    }
}
else {
    echo "<h2>We are sorry, but you have to be logged in to see this page,
please log in <a href='http://localhost/Life-Advisor/Antonio/login/View/login-form.php'>here</a></h2>";
}
require_once ('../../../view/footer.php');
?>