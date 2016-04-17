<?php
require_once('../Model/interactiondb.php');


$menu = $_POST['menu'];

$a = new PageDB();
$page = $a->listMenuPages($menu);


var_dump($page);
