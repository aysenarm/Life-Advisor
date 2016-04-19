<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<!-- the head section -->
<head>
    <title>Pages of my website</title>
    <link rel='stylesheet' href='../bootstrap/css/bootstrap.min.css' type='text/css' media='all'>
</head>

<!-- the body section -->
<body style="margin-left: 50px;">
<?php require_once '../../../content_top.php'; ?>
            <h1>Add Product</h1>
            <form role="form" action="../Controller/add_page.php" method="post" id="add_page_form"
                style="width: 50%;">
                <div class="form-group">
                    <label>Name:</label>
                    <input type="input" class="form-control" name="name" placeholder="Page name"/>
                    <br />

                    <label>Title:</label>
                    <input type="input" class="form-control" name="title" placeholder="Page title"/>
                    <br />

                    <label>ID creator:</label>
                    <select class="form-control" name="user">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        <option>6</option>
                        <option>7</option>
                    </select>
                    <br />

                    <label>Status:</label>
                    <select class="form-control" name="status">
                        <option>Posted</option>
                        <option>NOT posted</option>
                    </select>
                    <br />

                    <label>Content:</label>
                    <textarea rows="3" cols="50" class="form-control" name="content" placeholder="Page content TYPE HERE" ></textarea>
                    <br />
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