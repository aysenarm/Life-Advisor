<?php
require_once('../Model/interactiondb.php');
$page_id = $_POST['page_id'];
$a = new PageDB();
$page = $a->listOnePage($page_id);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

    <!-- the head section -->
    <head>
        <title>Update blog post</title>
        <link rel='stylesheet' href='../bootstrap/css/bootstrap.min.css' type='text/css' media='all'>
        <script type='text/javascript' src="../../ckeditor_4.5.8_standard/ckeditor/ckeditor.js"></script>
    </head>

    <!-- the body section -->
    <body style="margin-left: 10px;">
    <?php require_once '../../../content_top.php'; ?>
    <h3>Update Product</h3>
        <form action="../Controller/update_page.php" method="post" class="form-horizontal" enctype="multipart/form-data">
            <div class="form-group" style="margin-left: 10px;">
                <input type="hidden" name="id" value="<?php echo $page_id; ?>"/>
            </div>

            <div class="form-group" style="margin-left: 10px;">
                <label class="col-sm-2 control-label" style="color: black">Title:</label>
                <div class="col-sm-10">
                    <input type="input" class="col-sm-2 form-control" name="title" value="<?php echo $page['Title']; ?>"/>
                </div>
                <br />
            </div>

            <div class="form-group" style="margin-left: 10px;">
                <label class="col-sm-2 control-label" style="color: black">ID creator:</label>
                <div class="col-sm-10">
                    <input type="input" class="col-sm-2 form-control" name="user" value="<?php echo $page['ID_user']; ?>" readonly/>
                </div>
                <br />
            </div>

            <div class="form-group" style="margin-left: 10px;">
                <label class="col-sm-2 control-label" style="color: black">Status:</label>
                <div class="col-sm-10">
                    <select class="form-control" name="status">
                        <?php $selStat = $page['Status']?>
                        <?php
                        $types = ['posted', 'not posted'];
                        foreach($types as $type) { ?>
                            <option value="<?= $type ?>" <?php @$selStat==$type ? print "selected" : false; ?> > <?= $type ?></option>
                            <?php
                        } ?>
                    </select>
                </div>
                <br />
            </div>

            <div class="form-group" style="margin-left: 10px;">
                <label  class="col-sm-2 control-label">Content:</label>
                <div class="col-sm-10">
                    <textarea class="ckeditor" name="content" rows="50" cols="20" ><?php echo $page['Content']; ?></textarea>
                </div>
                <br />
            </div>

            <div class="form-group" style="margin-left: 10px;">
                <label  class="col-sm-2 control-label">Picture attached now:</label>
                <div class="col-sm-10">
                    <p><?php echo $page['ID_image']; ?></p>
                </div>
            </div>

            <div class="form-group" style="margin-left: 10px;">
                <label  class="col-sm-2 control-label">Picture:</label>
                <div class="col-sm-10">
                    <input type="file" name="image"><br>
                </div>
                <br />
            </div>

            <div class="form-group" style="margin-left: 10px;">
                <label class="col-sm-2 control-label" style="color: black">Tags:</label>
                <div class="col-sm-10">
                    <input type="input" class="col-sm-2 form-control" name="tags" value="<?php echo $page['Tags']; ?>" readonly/>
                </div>
                <br />
            </div>

            <div class="form-group" style="margin-left: 10px;">
                <label  class="col-sm-2 control-label" style="color: black">Menu:</label>
                <div class="col-sm-10">
                    <select class="form-control" name="menu">
                        <?php $menStat = $page['Menu'];
                        $menus = ['Recipes', 'House','Health','Finances','People','Time management'];
                        foreach($menus as $menu) { ?>
                            <option value="<?= $menu ?>" <?php @$menStat==$menu ? print "selected" : false; ?> > <?= $menu ?></option>
                            <?php
                        } ?>
                    </select>
                </div>
            </div>
            <br />

            <label class="control-label">&nbsp;</label>
            <input type="submit" class="btn btn-default" value="Update" />
            <br />

        </form>
        <hr>
        <p style="margin-left: 10px;"><a href="admin_pages.php" class="btn btn-default">Back</a></p>

<?php require_once '../../../content_bottom.php'; ?>
    </body>
</html>

