<?php require_once 'content_top.php'; ?>


<?php
//require_once 'Model/maindbclass.php';
//$db = mainDbclass::getDB();
$page = new UserDB();
$listing = $page->listPages();
// Users search terms is saved in $_POST['q']
$q = $_POST['q'];

// Create array for the names that are close to or match the search term
$results = array();
foreach($listing as $name) {
    // Keep only relevant results
    // First takes the phonetic keys from each word, and compares the difference between them
    // If more than 3 charachters need to be added, deleted, or replaced, the word is thrown out
    // To get broader results, change the 3 to a higher number (and vice versa — for narrower results use a number below 3)
    if (levenshtein(metaphone($q), metaphone($name['Tags'])) < 3) {
        array_push($results,$name['ID_page']);
    }
}
//var_dump($results);
//require 'Model/userInteractdb.php';

// Echo out results
foreach ($results as $result) {
    //echo $result."\n"; //show the array that i have
    $rez = $page->listOnePage($result);
    //var_dump($rez);
    ?>
    <div class="col-md-6">
        <div class="well">
            <?php echo '<img class="img-responsive" src="http://'.$_SERVER['SERVER_NAME'].'/Life-Advisor/Helen/pages/img/' . $rez['ID_image'] . '">' ?>
            <h3><?php echo $rez['Title'] ?></h3><hr>
            <div>
                <div class="col-xs-2">
                    <button type="button" class="btn btn-default btn-xs">
                        <span class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></span> <?php echo $rez['Rank'] ?>
                    </button>
                </div>
                <div class="col-xs-10">
                    <h6>Tags: <span class="text-danger"><?php echo $rez['Tags'] ?></span></h6>
                </div>
            </div>
            <div class="clearfix"></div>
            <div>
                <p><?php echo substr($rez['Content'], 0, 200) ?> ...</p><br/>
            </div>


            <form class="text-right" action="see_page.php" method="post">
                <input type="hidden" name="page_id" value="<?php echo $rez['ID_page']; ?>">
                <button type='submit' class='btn btn-danger'>Read more</button>
            </form>
        </div>
    </div>

    <?php
}
?>


<?php require_once 'content_bottom.php'; ?>