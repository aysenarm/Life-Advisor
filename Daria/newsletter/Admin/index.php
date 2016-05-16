<?php
require_once('database1.php');
require_once '../../../content_top.php';

$query = "SELECT * FROM signups ORDER BY id";
$sunscribers = $db->query($query);
?>
<h3>Subscribers List</h3>
<div id="page">
    <div id="main">
        <p style="padding-bottom: 10px"><a href="/Life-Advisor/Daria/newsletter/Admin/add_signup_form.php" class="btn btn-default">Add Subscriber</a></p>
        <div id="content">
            <table>
                <tr>
                    <th>Signup Email</th>
                    <th>Signup Date</th>
                    <th>Delete</th>
                </tr>
                <?php foreach ($sunscribers as $sunscriber) : ?>
                    <tr>
                        <td><?php echo $sunscriber['signup_email_address']; ?></td>
                        <td><?php echo $sunscriber['signup_date']; ?></td>

                        <td><form action="delete_signup.php" method="post" id="delete_book_form">
                                <input type="hidden" name="signup_id" value="<?php echo $sunscriber['id']; ?>" />
                                <input type="submit" value="Delete" class="btn btn-default btn-md"/>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
</div><!-- end page -->

<?php require_once '../../../content_bottom.php'; ?>