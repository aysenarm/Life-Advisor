<?php
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
require_once '../../../content_top.php'; ?>

<div id="page">

    <div id="main">

        <div id="content">
            <h2>Comments on Life Advisor</h2>

            <form>
                <select name="users" onchange="showComments(this.value)">
                    <option value="1" selected>All</option>
                    <option value="2">Published</option>
                    <option value="3">Not published</option>
                </select>
            </form>
            <br>
            <div id="txtHint">
               <?php $comments = $pdb->listComments();
                include_once "../View/table.php"; ?>
            </div>

        </div>
    </div>



</div><!-- end page -->

<?php require_once '../../../content_bottom.php'; ?>
</body>
</html>