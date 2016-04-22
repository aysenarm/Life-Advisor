<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<!-- the head section -->
<head>
    <title>Pages of my website</title>
    <link rel='stylesheet' href='../bootstrap/css/bootstrap.min.css' type='text/css' media='all'>
    <script type='text/javascript' src="../../ckeditor_4.5.8_standard/ckeditor/ckeditor.js"></script>
</head>

<!-- the body section -->
<body style="margin-left: 50px;">
<?php require_once '../../../content_top.php'; ?>
            <h1>Add Blog Post</h1>
            <form role="form" action="../Controller/add_page.php" method="post" id="add_page_form" enctype="multipart/form-data"
                style="width: 50%;">
                <div class="form-group">


                    <label>Title:</label>
                    <input type="input" class="form-control" name="title" placeholder="Blog title -> will be seen on the top of your post"/>
                    <br />

                 <!--   <label>ID creator:</label> -->
                    <input type="hidden" name="user" value="<?php echo $_SESSION['user_session']?>" />
                   <!-- <select class="form-control" name="user">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        <option>6</option>
                        <option>7</option>
                    </select> -->
                    <br />

                    <label>Status:</label>
                    <select class="form-control" name="status">
                        <option>Posted</option>
                        <option>NOT posted</option>
                    </select>
                    <br />

                    <label>Content:</label>
                    <textarea class="ckeditor" name="content" rows="50" cols="20" ></textarea>

                    <br />

                    <input type="hidden" name="rank" value="0" />

                    <label>Tags:</label>
                    <input type="input" class="form-control" name="tags" placeholder="Please enter tags with , as separator"/>
                    <br />

                    <label>Menu:</label>
                    <select class="form-control" name="menu">
                    <option value="Recipes">Recipes</option>
                    <option value="House">House</option>
                    <option value="Health">Health</option>
                    <option value="Finances">Finances</option>
                    <option value="People">People</option>
                    <option value="Time management">Time management</option>
                    </select>
                    <br />


                    <input type="file" name="image"><br>

                    <label>&nbsp;</label>
                    <input type="submit" class="btn btn-success" value="Add Page" />
                    <br />
                </div>
            </form>
            <p><a href="admin_pages.php" class="btn btn-primary">View Page List</a></p>
        </div>

    </div>

<?php require_once '../../../content_bottom.php'; ?>
</body>

</html>