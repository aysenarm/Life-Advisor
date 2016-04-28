<?php
require_once('database.php');
require_once '../../../content_top.php';

$query = "SELECT * FROM signups ORDER BY id";
$sunscribers = $db->query($query);
?>

<div id="page">
    <div id="main">
        <div id="content">
            <h2>Subscribers List</h2>
            <table>
                <tr>
                    <th>Signup Email</th>
                    <th>Signup Date</th>
                    <th>&nbsp;</th>
                </tr>
                <?php foreach ($sunscribers as $sunscriber) : ?>
                    <tr>
                        <td><?php echo $sunscriber['signup_email_address']; ?></td>
                        <td><?php echo $sunscriber['signup_date']; ?></td>

                        <td><form action="delete_signup.php" method="post" id="delete_book_form">
                                <input type="hidden" name="signup_id" value="<?php echo $sunscriber['id']; ?>" />
                                <input type="submit" value="Delete" />
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
</div><!-- end page -->

<?php require_once '../../../content_bottom.php'; ?>