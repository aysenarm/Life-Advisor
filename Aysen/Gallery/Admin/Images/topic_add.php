<?php include '../../../view/header.php'; ?>
<div id="main">
    <h1>Add a New Topic</h1>
    <form action="index.php" method="post" id="add_topic_form">
        <input type="hidden" name="action" value="add_topic" />

        <label>Name:</label>
        <input type="input" name="name" />
        <br />

        <label>&nbsp;</label>
        <input type="submit" value="Add Topic" />
        <br />
    </form>
    <p><a href="index.php?action=list_topics">View Topic List</a></p>

</div>
<?php include '../../../view/footer.php'; ?>