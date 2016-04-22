<?php require_once 'content_top.php'; ?>


<?php
require_once 'Antonio/maindbclass.php';
$db = Dbclass::getDB();
// Users search terms is saved in $_POST['q']
$q = $_POST['q'];

// Create array for the names that are close to or match the search term
$results = array();
foreach($db->query("SELECT * FROM page") as $name) {
    // Keep only relevant results
    // First takes the phonetic keys from each word, and compares the difference between them
    // If more than 3 charachters need to be added, deleted, or replaced, the word is thrown out
    // To get broader results, change the 3 to a higher number (and vice versa — for narrower results use a number below 3)
    if (levenshtein(metaphone($q), metaphone($name['Tags'])) < 3) {
        array_push($results,$name['ID_page']);
    }
}
// Echo out results
foreach ($results as $result) {
    echo $result."\n"; //show the array that i have
}
?>


<?php require_once 'content_bottom.php'; ?>