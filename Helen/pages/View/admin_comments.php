<?php
require_once '../../../content_top.php';
if(isset($_SESSION['user_session'])) {
$rez = $user->userInfo($_SESSION['user_session']);
//echo $rez['Rights'];
$_SESSION['role'] = $rez['Rights'];

if ($_SESSION['role'] == 2){
    echo "<h2>We are sorry, but you have to be ADMIN to see this page</h2><br/>
            <a href='" . $_SERVER['HTTP_REFERER'] . "'>Go back</a>";
}
else {
    require_once('../Model/interactiondb.php');
    $pdb =  new CommentDB();



?>

<!-- the head section -->
<head>
    <title>Comments on Life Advisor</title>
    <link rel='stylesheet' href='../../comments/bootstrap/css/bootstrap.min.css' type='text/css' media='all'>

    <script>
        function showComments(str) {
                if (window.XMLHttpRequest) {
                    // code for IE7+, Firefox, Chrome, Opera, Safari
                    xmlhttp = new XMLHttpRequest();
                } else {
                    // code for IE6, IE5
                    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                }
                xmlhttp.onreadystatechange = function() {
                    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                        document.getElementById("txtHint").innerHTML = xmlhttp.responseText;
                    }
                };
                xmlhttp.open("GET","../Controller/getcomments.php?q="+str,true);
                xmlhttp.send();
        }
    </script>
</head>

<!-- the body section -->
<body style="margin-left: 10px; margin-right: 10px;">

<?php
 ?>

<div id="page">

    <div id="main">

        <div id="content">
            <h3>Comments on Life Advisor</h3>

            <form style="margin-left: -15px;">
                <div class="col-sm-3">
                    <select name="users" onchange="showComments(this.value)" class="form-control">
                        <option value="1" selected>All</option>
                        <option value="2">Published</option>
                        <option value="3">Not published</option>
                    </select>
                </div>
            </form>
            </br>
            </br>
            </br>
            <div id="txtHint">
               <?php $comments = $pdb->listComments();
                include_once "../View/table.php"; ?>
            </div>

        </div>
    </div>
</div><!-- end page -->

<?php

}
}
else {
    echo "<h2>We are sorry, but you have to be logged in to see this page,
please log in <a href='http://localhost/Life-Advisor/Antonio/login/View/login-form.php'>here</a></h2>";
}
require_once '../../../content_bottom.php'; ?>
</body>
</html>