<?php include '../../../view/header.php'; ?>
<div id="main">
    <h1>Add a New Topic</h1>
    <div class="form-group">
    <form action="?action=list_topics&category_id=<?php echo $categoryID;?>" method="post" id="add_topic_form">
        <input type="hidden" name="action" value="add_topic" />

        <label>Name:</label>
        <input type="input" name="name" class="form-control"/>
        <br />
        <label>&nbsp;</label>
        <input type="submit" value="Add Topic" class="btn btn-default"/>
        <br/>
    </form>
        </div>
    <p><a href="?action=list_topics&category_id=<?php echo $categoryID;?>" class="btn btn-info" role="button">View Topic List</a></p>

</div>
<?php include '../../../view/footer.php'; ?>