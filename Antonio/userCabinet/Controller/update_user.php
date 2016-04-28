<?php
// Get the product data
$id = $_POST['id'];
$name = $_POST['name'];
$surname = $_POST['surname'];
$username = $_POST['username'];
$email = $_POST['email'];
$phone = $_POST['phone'];

require_once('../Model/cabinetdb.php');
$cabinet = new Cabinet();

    if(is_uploaded_file($_FILES["image"]["tmp_name"]))
    {
        $path = '../img/';
        if (!move_uploaded_file($_FILES["image"]["tmp_name"], $path.$_FILES["image"]["name"])
        ){
            echo 'Smth is wrong with uploading the file';
            echo $_FILES['image']['tmp_name'];
            echo $_FILES['image']['name'];
        }
        else {
            $image = $_FILES["image"]["name"];

            // If valid, update the page in the database
            $cabinet->updateUserSm($id,$name,$surname, $username, $email,$phone, $image);

            if ($id == $_SESSION['user_session']){
                // Display the Product List page
                header('location: ../View/userCabinet.php');
            }
            else {
                header('location: ../Admin/View/admin_users.php');
            }


        }
    }


    else {

        // If valid, update the page in the database
        $cabinet->updateUserSmNoImage($id,$name,$surname, $username, $email,$phone);

        if ($id == $_SESSION['user_session']){
            // Display the Product List page
            header('location: ../View/userCabinet.php');
        }
        else {
            header('location: ../Admin/View/admin_users.php');
        }
    }
