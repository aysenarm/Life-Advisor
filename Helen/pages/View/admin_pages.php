<?php

    require_once('../Model/interactiondb.php');

    $pdb =  new PageDB();
    $pages = $pdb->listPages();


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
<body style="margin-left: 10px; margin-right: 10px;">
<?php require_once '../../../content_top.php'; ?>
<div id="page">

    <div id="header">
        <h1>Page Manager</h1>
    </div>

    <div id="main">

        <div id="content">
            <h2>Pages list</h2>
            <table class="table table-striped table-bordered table-hover">
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>ID creator</th>
                    <th>Status</th>
                    <th>Rank</th>
                    <th>Tags</th>
                    <th>Menu</th>
                    <th>ID_image</th>
                    <th>&nbsp;</th>
                    <th>&nbsp;</th>
                    <th>&nbsp;</th>

                </tr>
                <?php foreach ($pages as $page) : ?>
                    <tr>
                        <td><?php echo $page['ID_page']; ?></td>
                        <td><?php echo $page['Title']; ?></td>
                        <td><?php echo $page['ID_user']; ?></td>
                        <td><?php echo $page['Status']; ?></td>
                        <td><?php echo $page['Rank']; ?></td>
                        <td><?php echo $page['Tags']; ?></td>
                        <td><?php echo $page['Menu']; ?></td>
                        <td><?php echo $page['ID_image']; ?></td>
                        <td><form action="../Controller/delete_page.php" method="post" id="delete_page_form">

                                <input type="hidden" name="page_id" value="<?php echo $page['ID_page']; ?>" />
                                <input type="submit" class="btn btn-danger btn-xs" value="Delete" />

                            </form></td>

                        <td><form action="update_page_form.php" method="post" id="update_page_form">

                                <input type="hidden" name="page_id" value="<?php echo $page['ID_page']; ?>" />
                                <input type="submit" class="btn btn-info btn-xs" value="Update" />

                            </form></td>

                        <td><form action="see_page.php" method="post" id="see_page">

                                <input type="hidden" name="page_id" value="<?php echo $page['ID_page']; ?>" />
                                <input type="submit" class="btn btn-xs" value="See page" />

                            </form></td>

                    </tr>
                <?php endforeach; ?>
            </table>
            <p><a href="add_page_form.php" class="btn btn-success">Add Page</a></p>
        </div>
    </div>


</div><!-- end page -->

<?php require_once '../../../content_bottom.php'; ?>
</body>
</html>