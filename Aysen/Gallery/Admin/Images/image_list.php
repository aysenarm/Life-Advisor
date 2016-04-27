<div id="main">

    <h1>Image List</h1>
    <div class="table-responsive">
        <table class="table table-hover">
            <tr>
                <th>ID</th>
                <th>Image</th>
                <th>Title</th>
                <th>UserID</th>
                <th>Publishing Date</th>
                <th>See Picture</th>
                <th>Delete</th>
            </tr>
            <?php foreach ($images as $image) : ?>
            <tr>
                <td><?php echo $image->getID(); ?></td>
                <td>
                    <img src="photo_gallery/<?php echo $gallery->getID();?>/<?php echo $image->getName();?>" alt="<?php echo $image->getAlt();?>" style="width: auto; height: auto;">
                </td>
                <td><?php echo $image->getName(); ?></td>
                <td><?php echo $image->getUserID(); ?></td>
                <td><?php echo $image->getDatePublished(); ?></td>


                <td>
                    <a href="photo_gallery/<?php echo $gallery->getID();?>/<?php echo $image->getName();?>" target="_blank" class="btn btn-info" role="button">See Picture</a>
                </td>
                <td><form action=".?gallery_id=<?php echo $gallery->getID();?>" method="post" id="delete_image_form">
                        <input type="hidden" name="action" value="delete_image" />
                        <input type="hidden" name="image_id" value="<?php echo $image->getID(); ?>" />
                        <input type="submit" value="Delete" class="btn btn-default" />
                    </form></td>
            </tr>
            <?php endforeach; ?>
        </table>
        </div>
        <p><a href="?action=show_add_form&gallery_id=<?php echo $gallery->getID();?>" class="btn btn-info" role="button">Add Image</a></p>
    </div>

</div>
