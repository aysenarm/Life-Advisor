<?php
//require_once '../Model/maindbclass.php';
require_once('../Model/interactiondb.php');
$com_id = $_POST['com_id'];
$db = Dbclass::getDB();
$a = new CommentDB();
$comment = $a->listOneComment($com_id);

?>

<html xmlns="http://www.w3.org/1999/xhtml">

    <!-- the head section -->
    <head>
        <title>Comments on Life Advisor</title>
        <link rel='stylesheet' href='../../comments/bootstrap/css/bootstrap.min.css' type='text/css' media='all'>
    </head>

    <!-- the body section -->
    <body style="margin-left: 10px;">
    <?php
    require_once '../../../content_top.php'; ?>
    <h3>Update Comment</h3>
        <form action="../Controller/update_comment.php" method="post" class="form-horizontal">
            <div class="form-group" style="margin-left: 10px;">
                <input type="hidden" name="id" value="<?php echo $com_id; ?>" />
            </div>

            <div class="form-group" style="margin-left: 10px;">
                <label class="col-sm-2 control-label" style="color: black">ID Page:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="id_page" value="<?php echo $comment['ID_page']; ?>" readonly/>
                </div>
                <br />
            </div>

            <div class="form-group" style="margin-left: 10px;">
                <label class="col-sm-2 control-label" style="color: black;">ID User:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="id_user" value="<?php echo $comment['ID_user']; ?>" readonly/>
                </div>
                <br />
            </div>

            <div class="form-group" style="margin-left: 10px;">
                <label class="col-sm-2 control-label" style="color: black;">Text:</label>
                <div class="col-sm-10">
                    <textarea type="text" class="form-control" name="text" readonly><?php echo$comment['Text']; ?></textarea>
                </div>
                <br />
            </div>

            <div class="form-group" style="margin-left: 10px;">
                <label class="col-sm-2 control-label" style="color: black;">State:</label>
                <div class="col-sm-10">
                    <select class="form-control" name="state">
                        <?php $selStat = $comment['state'];?>
                        <?php
                        $types = ['published', 'not published'];
                        foreach($types as $type) { ?>
                            <option value="<?= $type ?>" <?php @$selStat==$type ? print "selected" : false; ?> > <?= $type ?></option>
                            <?php
                        } ?>
                    </select>
                </div>
            </div>

            <br />
            <br />

                <label class="control-label">&nbsp;</label>
                <input type="submit" class="btn btn-default" value="Update Comment" />
                <br />

        </form>
        <hr>
        <p style="margin-left: 10px"><a href="admin_comments.php" class="btn btn-default">Back</a></p>

    <?php require_once '../../../content_bottom.php'; ?>
    </body>
</html>

