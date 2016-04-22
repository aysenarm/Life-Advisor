<?php
// Get the product data

$title = $_POST['title'];
$user = $_POST['user'];
$status = $_POST['status'];
$content = $_POST['content'];
$rank = $_POST['rank'];
$tags = $_POST['tags'];
$menu = $_POST['menu'];
//$image = $_FILES["image"]["name"];
$image = 0;

// Validate inputs
if ( empty($title) || empty($user) || empty($status) || empty($content)) {
    echo "Invalid page data. Check all fields and try again.";
} else {
    // Проверяем загружен ли файл
    if(is_uploaded_file($_FILES["image"]["tmp_name"]))
    {
        $path = '../img/';

        if (!move_uploaded_file($_FILES["image"]["tmp_name"], $path.$_FILES["image"]["name"])
        //!@copy($_FILES['image']['tmp_name'], $path . $_FILES['picture']['name'])
        ){
        echo 'Что-то пошло не так';
        echo $_FILES['image']['tmp_name'];
        echo $_FILES['image']['name'];
        }
        else {

        // Если файл загружен успешно, перемещаем его
        // из временной директории в конечную
        //move_uploaded_file($_FILES["image"]["tmp_name"], "img/".$_FILES["image"]["name"]);

        // If valid, add the product to the database
        require_once('../Model/interactiondb.php');
        $pdb =  new PageDB();
        $pdb->addPages($title,$user,$status,$content,$rank, $tags, $menu, $image);

        // Display the Product List page
        header('location: ../View/admin_pages.php');
        }

    } else {
        echo("Cannot load file");
    }

}
?>