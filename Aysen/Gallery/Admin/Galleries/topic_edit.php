<?php include '../../../view/header.php'; ?>
<div id="main">
    <h1>Edit Topic</h1>
    <form action="index.php" method="post" id="edit_topic_form">
        <input type="hidden" name="action" value="edit_topic" />

        <label>Name:</label>
        <input type="input" name="name" value= "<?php echo $topic->getName();?>" />
        <br />

        <label>&nbsp;</label>
        <input type="submit" value="Edit Topic" />
        <br />
        
        <input type="hidden" name="edited_topic_id"
                           value="<?php echo $_POST['topic_id']; ?>" />
    </form>
    <p><a href="index.php?action=list_topics">View Topic List</a></p>

</div>
<?php include '../../../view/footer.php'; ?>