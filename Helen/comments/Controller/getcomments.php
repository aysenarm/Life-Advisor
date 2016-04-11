<?php
$q = intval($_GET['q']);

require_once('../Model/interactiondb.php');
$pdb =  new CommentDB();


switch ($q){
    case 1:
        $comments = $pdb->listComments();
        include_once "../View/table.php";
    break;

    case 2:
        $comments = $pdb->listNotPublishedComments('published');
        include_once "../View/table.php";
    break;
    case 3:
        $comments = $pdb->listNotPublishedComments('not published');
        include_once "../View/table.php";
    break;
}

