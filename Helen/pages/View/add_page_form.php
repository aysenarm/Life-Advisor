
<?php require_once '../../../content_top.php'; ?>
<head>
    <title>Pages of my website</title>
    <script type='text/javascript' src="../../ckeditor_4.5.8_standard/ckeditor/ckeditor.js"></script>
</head>
<div class="form-group">
            <h3>Add Blog Post</h3>
            <form role="form" action="../Controller/add_page.php" method="post" id="add_page_form" enctype="multipart/form-data" class="form-horizontal">

                    <div class="form-group">
                        <label class="col-sm-2 control-label" style="color: black">Title:</label>
                        <div class="col-sm-10">
                            <input type="input" class="col-sm-2 form-control" name="title" placeholder="Blog title -> will be seen on the top of your post"/>
                        </div>
                        <br />
                    </div>

                    <input type="hidden" name="user" value="<?php echo $_SESSION['user_session']?>" />

                    <div class="form-group">
                        <label class="col-sm-2 control-label">Status:</label>
                        <div class="col-sm-10">
                            <select class="form-control" name="status">
                                <option>Posted</option>
                                <option>NOT posted</option>
                            </select>
                        </div>
                        <br />
                    </div>

                    <div class="form-group">
                        <label  class="col-sm-2 control-label">Content:</label>
                        <div class="col-sm-10">
                            <textarea class="ckeditor" name="content" rows="50" cols="20" ></textarea>
                        </div>
                        <br />
                    </div>

                    <input type="hidden" name="rank" value="0" />

                    <div class="form-group">
                        <label  class="col-sm-2 control-label">Tags:</label>
                        <div class="col-sm-10">
                            <input type="input" class="form-control" name="tags" placeholder="Please enter tags with , as separator"/>
                        </div>
                        <br />
                    </div>

                    <div class="form-group">
                        <label  class="col-sm-2 control-label">Menu:</label>
                        <div class="col-sm-10">
                            <select class="form-control" name="menu">
                            <option value="Recipes">Recipes</option>
                            <option value="House">House</option>
                            <option value="Health">Health</option>
                            <option value="Finances">Finances</option>
                            <option value="People">People</option>
                            <option value="Time management">Time management</option>
                            </select>
                        </div>
                        <br />
                    </div>

                    <div class="form-group">
                        <label  class="col-sm-2 control-label">Image:</label>
                        <div class="col-sm-10">
                            <input type="file" name="image">
                        </div>
                        <br />
                    </div>
                </div>
                <br />
                <input type="submit" class="btn btn-default" value="Add Page" />
                <br />

            </form>
            <hr>
            <p><a href="admin_pages.php" class="btn btn-default">Back</a></p>
</div>


