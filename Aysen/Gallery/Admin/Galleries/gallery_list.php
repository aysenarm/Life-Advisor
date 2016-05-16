<div id="main">

    <h3>Gallery List</h3>
    <div class="table-responsive">
        <p><a href="?action=show_add_form" class="btn btn-default" role="button">Add Gallery</a></p>
        </br>
        <table class="table">
            <tr>
                <th>ID</th>
                <th>Cover Photo</th>
                <th>Title</th>
                <th>Publishing Date</th>
                <th>UserID</th>
                <th>Delete</th>
            </tr>

            <?php foreach ($galleries as $gallery) : ?>
            <tr  onclick='showImages(<?php echo $gallery->getID(); ?>)'>
                <td><?php echo $gallery->getID(); ?></td>
                <td>
                    <img src="../Images/photo_gallery/<?php echo $gallery->getImage();?>" alt="Cover of <?php echo $gallery->getName();?>" style="width: auto; height: auto;">
                </td>
                <td><?php echo $gallery->getName(); ?></td>
                <td><?php echo $gallery->getDatePublished(); ?></td>
                <td><?php echo $gallery->getUserID(); ?></td>
                <td><form action="." method="post" id="delete_gallery_form">
                    <input type="hidden" name="action" value="delete_gallery" />
                    <input type="hidden" name="gallery_id" value="<?php echo $gallery->getID(); ?>" />
                    <input type="submit" value="Delete" class="btn btn-default"/>
                </form></td>
            </tr>
            <?php endforeach; ?>
        </table>
        </div>
    </div>
    <script>
        function showImages(rowId) {
            window.location.assign("<?php
                    $url  = "http://";
                    $url .= $_SERVER['SERVER_NAME'];
                    $url .= htmlspecialchars($_SERVER['REQUEST_URI']);
                    $themeurl = dirname(dirname($url)) . "/Images/";
                    echo $themeurl;?>" + "?action=list_images&gallery_id="+rowId);
        }
    </script>
</div>
