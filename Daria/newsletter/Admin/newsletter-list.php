<?php
require_once('database1.php');
require_once '../../../content_top.php';

$query = "SELECT * FROM newsletter ORDER BY id";
$newsletters = $db->query($query);
?>

<h3>Newsletter List</h3>
<div id="page">
    <p><a href="newsletter.php" class="btn btn-default">Add newsletter</a></p>
    <br />
    <div id="main">
        <div id="content">
            <table>
                <tr>
                    <th>Sender Email</th>
                    <th>Creator Name</th>
                    <th>Descripion</th>
                    <th>Time</th>
                    <th>Status</th>
                    <th>Subject</th>
                    <th>Delete</th>
                    <th>Update</th>
                    <th>Send</th>
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
                                <input type="submit" value="Delete" class="btn btn-default btn-md"/>
                            </form>
                        </td>
                        <td><form action="update_newsletter_form.php" method="post" id="update_newsletter">
                                <input type="hidden" name="newsletter_id" value="<?php echo $newsletter['id']; ?>" />
                                <input type="submit" value="Update" class="btn btn-default btn-md"/>
                            </form>
                        </td>
                        <td><form action="send.php" method="post" id="send_newsletter">
                                <input type="hidden" name="newsletter_id" value="<?php echo $newsletter['id']; ?>" />
                                <input type="submit" value="Send" class="btn btn-default btn-md"/>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </table>

        </div>
    </div>
</div><!-- end page -->
