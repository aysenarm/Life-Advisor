<?php
require 'functions.php' ;

$term = $_POST['term'];
$rate = $_POST['rate'];
$amount = $_POST['amount'];
$startmonth = $_POST['startmonth'];
$startyear = $_POST['startyear'];

$credit = credit($term, $rate, $amount, $startmonth, $startyear);
if (empty($term) || empty($rate) || empty($amount) || empty($startmonth) || empty($startyear)) {
    $error = "Invalid product data. Check all fields and try again.";
}
echo json_encode($credit);