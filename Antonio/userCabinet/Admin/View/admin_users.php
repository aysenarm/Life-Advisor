<?php
require_once '../../../../content_top.php';
if(isset($_SESSION['user_session'])) {
$rez = $user->userInfo($_SESSION['user_session']);
//echo $rez['Rights'];
$_SESSION['role'] = $rez['Rights'];

if ($_SESSION['role'] == 2){
    echo "<h2>We are sorry, but you have to be ADMIN to see this page</h2><br/>
            <a href='" . $_SERVER['HTTP_REFERER'] . "'>Go back</a>";
}
else {
    require_once('../../Model/cabinetdb.php');
    $cabinet = new Cabinet();
    $users = $cabinet->listUsers();
    ?>

        <h3>Users</h3>
            <div id="content">
                <table>
                    <tr>
                        <th>Username</th>
                        <th>Name</th>
                        <th>Surname</th>
                        <th>Rights</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Delete</th>
                        <th>Update</th>
                    </tr>
                    <?php foreach ($users as $user) : ?>
                        <tr>
                            <td><?php echo $user['Username']; ?></td>
                            <td><?php echo $user['Name']; ?></td>
                            <td><?php echo $user['Surname']; ?></td>
                            <td><?php
                                if ($user['Rights'] == 1){
                                    echo "Admin";
                                } else {echo "User";}
                                ?></td>
                            <td><?php echo $user['Email']; ?></td>
                            <td><?php echo $user['Phone']; ?></td>
                            <td>
                                <form action="../Controller/delete_user.php" method="post" id="delete_page_form">

                                    <input type="hidden" name="user_id" value="<?php echo $user['ID_user']; ?>"/>
                                    <input type="submit" class="btn btn-default btn-md" value="Delete"/>

                                </form>
                            </td>

                            <td>
                                <form action="update_user_form.php" method="post" id="update_page_form">

                                    <input type="hidden" name="user_id" value="<?php echo $user['ID_user']; ?>"/>
                                    <input type="submit" class="btn btn-default btn-md" value="Update"/>

                                </form>
                            </td>



                        </tr>
                    <?php endforeach; ?>
                </table>
            </div>

    <?php
}
}
else {
    echo "<div class='row'>";
        echo "<div class='col-xs-2'>";
        echo "</div>";
        echo "<div class='col-xs-8'>";
        echo "<h2>We are sorry, but you have to be logged in to see this page,
    please log in <a href='http://localhost/Life-Advisor/Antonio/login/View/login-form.php'>here</a></h2>";
        echo "</div>";
        echo "<div class='col-xs-2'>";
        echo "</div>";
    echo "</div>";
}
require_once '../../../../content_bottom.php'; ?>