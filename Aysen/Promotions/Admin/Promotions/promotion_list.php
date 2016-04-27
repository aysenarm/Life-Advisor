<div id="main">

    <h1>Promotion List</h1>
    <div class="table-responsive">
        <table class="table table-hover">
            <tr>
                <th>ID</th>
                <th>Image</th>
                <th>Title</th>
                <th>Key</th>
                <th>Last Valid Date</th>
                <th>Publishing Date</th>
                <th>UserID</th>
                <th>Detail</th>
                <th>Edit</th>
                <th>Delete</th>

            </tr>
            <?php foreach ($promotions as $promotion) : ?>
            <tr>
                <td><?php echo $promotion->getID(); ?></td>
                <td>
                    <img src="../Images/photo_gallery/<?php echo $promotion->getImage();?>" alt="Cover of <?php echo $promotion->getTitle();?>" style="width: auto; height: auto;">
                </td>
                <td><?php echo $promotion->getTitle(); ?></td>
                <td><?php echo $promotion->getKey(); ?></td>
                <td><?php echo $promotion->getDateValid(); ?></td>
                <td><?php echo $promotion->getDatePublished(); ?></td>
                <td><?php echo $promotion->getUserID(); ?></td>
                <td><form action=".?action=list_promotions" method="post" id="detail_promotion_form">
                        <input type="hidden" name="action" value="show_detail_form">
                        <input type="hidden" name="promotion_id" value="<?php echo $promotion->getID(); ?>" />
                        <input type="submit" value="Details"class="btn btn-default" />
                    </form></td>
                <td><form action=".?action=list_promotions" method="post" id="edit_promotion_form">
                        <input type="hidden" name="action" value="show_edit_form" />
                        <input type="hidden" name="promotion_id" value="<?php echo $promotion->getID(); ?>" />
                        <input type="submit" value="Edit" class="btn btn-default" />
                    </form></td>
                <td><form action="." method="post" id="delete_promotion_form">
                        <input type="hidden" name="action" value="delete_promotion" />
                        <input type="hidden" name="promotion_id" value="<?php echo $promotion->getID(); ?>" />
                        <input type="submit" value="Delete" class="btn btn-default"/>
                    </form></td>
            </tr>
            <?php endforeach; ?>
        </table>
        </div>
        <p><a href="?action=show_add_form" class="btn btn-info" role="button">Add Promotion</a></p>
    </div>
</div>
