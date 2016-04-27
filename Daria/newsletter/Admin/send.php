<head>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
</head>


<div id="list-users">
    <?php
    include_once 'list-users.php';
    if(isset($_POST['newsletter_id'])){
        $id = $_POST['newsletter_id'];
newsletter::
foreach($email as $e){
    $response = [];
    $response = json_decode(Newsletter::register($e), true);

    if($response['status']=='success'){
        include_once 'Daria/newsletter/gmail.php';
    }
    echo $response['message'];
}
}



    ?>

</div>
<script type="text/javascript" >
    $(function(){
        $('#selectall').click(function(){
            $(this).parents('#list-users').find(':checkbox').attr('checked',this.checked);
        });
    });
</script>

