<?php

$id = $_POST['id'];
$amount = $_POST['amount'];
$cardholder_name = $_POST['cardholder_name'];
$card_number = $_POST['card_number'];
$expiry_date = $_POST['expiry_date'];
$cvs = $_POST['cvs'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$status = $_POST['status'];
$first_transaction = $_POST['first_transaction'];
$regularity = $_POST['regularity'];


// ---------- Encrypting ----------

$key = '(encrypt)-(decrypt)';

function encrypt($word, $k) {

    $iv = mcrypt_create_iv(
        mcrypt_get_iv_size(MCRYPT_RIJNDAEL_128, MCRYPT_MODE_CBC),
        MCRYPT_DEV_URANDOM
    );

    $encrypted = base64_encode(
        $iv .
        mcrypt_encrypt(
            MCRYPT_RIJNDAEL_128,
            hash('sha256', $k, true),
            $word,
            MCRYPT_MODE_CBC,
            $iv
        )
    );

    return $encrypted;
}

$cardholder_name = encrypt($cardholder_name, $key);
$card_number = encrypt($card_number, $key);
$expiry_date = encrypt($expiry_date, $key);
$cvs = encrypt($cvs, $key);


// --------------------------------



if (
    empty($id) ||empty($amount) || empty($cardholder_name) || empty($card_number) || empty($expiry_date) || empty($cvs) || empty($email) || empty($phone) || empty($status) || empty($first_transaction) || empty($regularity)
    ) {
    $error = "Invalid data!";
    include('error.php');
}
else {
    require_once('database.php');


    require_once "Model/cl_donation.php";
    $donation_feature = new Donation_feature();
    $donation_feature->dua($db, $id, $amount, $cardholder_name, $card_number, $expiry_date, $cvs, $email, $phone, $status, $first_transaction, $regularity);
    
    header('location: donation_admin.php');
}

?>