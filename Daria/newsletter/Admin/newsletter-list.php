<?php
require_once('database.php');
require_once '../../../content_top.php';

$query = "SELECT * FROM newsletter ORDER BY id";
$newsletters = $db->query($query);
?>

<div id="page">
    <div id="main">
        <div id="content">
            <h2>Newsletter List</h2>
            <table>
                <tr>
                    <th>Sender Email</th>
                    <th>Creator Name</th>
                    <th>Descripion</th>
                    <th>Time</th>
                    <th>Status</th>
                    <th>Subject</th>
                    <th>&nbsp;</th>
                    <th>&nbsp;</th>
                </tr>
                <?php foreach ($newsletters as $newsletter) : ?>
                    <tr>
                        <td><?php echo $newsletter['sender_email']; ?></td>
                        <td><?php echo $newsletter['creator_name']; ?></td>
                        <td><?php echo $newsletter['description']; ?></td>
                        <td><?php echo $newsletter['time']; ?></td>
                        <td><?php echo $newsletter['status']; ?></td>
                        <td><?php echo $newsletter['subject']; ?></td>


                        <td><form action="delete_newsletter.php" method="post" id="delete_newsletter">
                                <input type="hidden" name="newsletter_id" value="<?php echo $newsletter['id']; ?>" />
                                <input type="submit" value="Delete" />
                            </form>
                        </td>
                        <td><form action="update_newsletter_form.php" method="post" id="update_newsletter">
                                <input type="hidden" name="newsletter_id" value="<?php echo $newsletter['id']; ?>" />
                                <input type="submit" value="Update" />
                            </form>
                        </td>
                        <td><form action="send.php" method="post" id="send_newsletter">
                                <input type="hidden" name="newsletter_id" value="<?php echo $newsletter['id']; ?>" />
                                <input type="submit" value="Send" />
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </table>

        </div>
    </div>
</div><!-- end page -->
