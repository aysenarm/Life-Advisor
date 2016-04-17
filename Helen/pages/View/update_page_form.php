<?php

require_once('../Model/interactiondb.php');
$page_id = $_POST['page_id'];
$db = Dbclass::getDB();

$a = new PageDB();
$page = $a->listOnePage($page_id);


?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

    <!-- the head section -->
    <head>
        <title>Pages of my website</title>
        <link rel='stylesheet' href='../bootstrap/css/bootstrap.min.css' type='text/css' media='all'>
    </head>

    <!-- the body section -->
    <body style="margin-left: 10px;">
    <?php require_once '../../../content_top.php'; ?>
    <h1>Update Product</h1>
        <form action="../Controller/update_page.php" method="post" class="form-horizontal"
              style="width: 50%;">
            <div class="form-group" style="margin-left: 10px;">
                <input type="hidden" name="id" value="<?php echo $page_id; ?>"/>
            </div>

            <div class="form-group" style="margin-left: 10px;">
                <label class="col-sm-2 control-label">Title:</label>
                <div class="col-sm-10">
                    <input type="input" class="col-sm-2 form-control" name="title" value="<?php echo $page['Title']; ?>"/>
                </div>
                <br />
            </div>

            <div class="form-group" style="margin-left: 10px;">
                <label class="col-sm-2 control-label">ID creator:</label>
                <div class="col-sm-10">
                    <select class="form-control" name="user">
                        <?php $selStat = $page['ID_user']?>
                        <?php
                        $types = ['1', '2', '3', '4', '5', '6', '7'];
                        foreach($types as $type) { ?>
                            <option value="<?= $type ?>" <?php @$selStat==$type ? print "selected" : false; ?> > <?= $type ?></option>
                            <?php
                        } ?>

                    </select>
                </div>
                <br />
            </div>

            <div class="form-group" style="margin-left: 10px;">
                <label class="col-sm-2 control-label">Status:</label>
                <div class="col-sm-10">
                    <select class="form-control" name="status">
                        <?php $selStat = $page['Status']?>
                        <?php
                        $types = ['Posted', 'NOT posted'];
                        foreach($types as $type) { ?>
                            <option value="<?= $type ?>" <?php @$selStat==$type ? print "selected" : false; ?> > <?= $type ?></option>
                            <?php
                        } ?>
                    </select>
                </div>
                <br />
            </div>

            <div class="form-group" style="margin-left: 10px;">
                <label class="col-sm-2 control-label">Content:</label>
                <script src="//cdn.ckeditor.com/4.5.8/standard/ckeditor.js"></script>
                <div class="col-sm-10">
                    <input type="input" class="col-sm-2 form-control" name="content" value="<?php echo $page['Content']; ?>" />
                </div>
                <br />
            </div>
                <label class="control-label">&nbsp;</label>
                <input type="submit" class="btn btn-success" value="Update Page" />
                <br />

        </form>
<br />
        <p><a href="index.php" class="btn btn-primary">View Page List</a></p>

<?php require_once '../../../content_bottom.php'; ?>
    </body>
</html>

