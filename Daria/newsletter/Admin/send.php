<head>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
</head>


<div id="list-users">
</div>
<?php
include 'newsletterdb.php';
include_once 'list-users.php';
?>
<script type="text/javascript" >
    $(function(){
        $('#selectall').click(function(){
            $(this).parents('#list-users').find(':checkbox').attr('checked',this.checked);
        });
    });
</script>

