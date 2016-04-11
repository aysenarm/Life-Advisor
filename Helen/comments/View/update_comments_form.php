<?php
require_once '../Model/dbclass.php';
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
        <link rel='stylesheet' href='../bootstrap/css/bootstrap.min.css' type='text/css' media='all'>
    </head>

    <!-- the body section -->
    <body style="margin-left: 10px;">
    <?php
    require_once '../../../content_top.php'; ?>
    <h1>Update Comment</h1>
        <form action="../Controller/update_comment.php" method="post" class="form-horizontal"
              style="width: 50%;">
            <div class="form-group" style="margin-left: 10px;">
                <input type="hidden" name="id" value="<?php echo $com_id; ?>" disabled/>
            </div>

            <div class="form-group" style="margin-left: 10px;">
                <label class="col-sm-2 control-label">ID PAGE:</label>
                <div class="col-sm-10">
                    <input type="text" name="id_page" value="<?php echo $comment['ID_page']; ?>" disabled />
                </div>
                <br />
            </div>

            <div class="form-group" style="margin-left: 10px;">
                <label class="col-sm-2 control-label">ID USER:</label>
                <div class="col-sm-10">
                    <input type="text" name="id_user" value="<?php echo $comment['ID_user']; ?>" disabled/>
                </div>
                <br />
            </div>

            <div class="form-group" style="margin-left: 10px;">
                <label class="col-sm-2 control-label">TEXT:</label>
                <div class="col-sm-10">
                    <input type="text" name="text" value="<?php echo$comment['Text']; ?>" disabled/>
                </div>
                <br />
            </div>

            <div class="form-group" style="margin-left: 10px;">
                <label class="col-sm-2 control-label">State:</label>
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
                <br />
            </div>

                <label class="control-label">&nbsp;</label>
                <input type="submit" class="btn btn-success" value="Update Comment" />
                <br />

        </form>
<br />
        <p><a href="admin_comments.php" class="btn btn-primary">View Comments List</a></p>

    <?php require_once '../../../content_bottom.php'; ?>
    </body>
</html>

