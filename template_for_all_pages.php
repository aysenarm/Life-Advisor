<?php require_once 'content_top.php'; ?>

<title>Your Title</title>

     <?php
if(isset($_SESSION['user_session'])) {



    // if user is logged in and you don't care about his rights to see some pages
    // TYPE YOUR CONTENT HERE and don't include code from


// ---------------HERE --------------------
    // IF YOU need to check user's rights = USE $_SESSION['role'] variable and remember that it gives you back a number
    // 2 for just logged in user
    // 1 for ADMIN
    // checking will look like
    //echo $rez['Rights'];
    $rez = $user->userInfo($_SESSION['user_session']);
    $_SESSION['role'] = $rez['Rights'];
    echo $_SESSION['role'];
    if ($_SESSION['role'] == 2){
        echo "<h2>We are sorry, but you have to be ADMIN to see this page</h2><br/>
            <a href='".$_SERVER['HTTP_REFERER']."'>Go back</a>";
    }
    else {
        //ADD CODE FOR ADMINS HERE
    }

// --------------- TO HERE --------------------

}
else {
    echo "<h2>We are sorry, but you have to be logged in to see this page,
please log in <a href='http://localhost/Life-Advisor/Antonio/login/View/login-form.php'>here</a></h2>";
}
?>

<?php require_once 'content_bottom.php'; ?>