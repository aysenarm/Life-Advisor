<?php
require_once('../Model/interactiondb.php');
$a = new PageDB();
    $id = $_POST['id'];
    $a->rank($id);

header("Location:".$_SERVER['HTTP_REFERER']."?l=y");