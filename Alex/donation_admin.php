<?php require_once '../content_top.php'; ?>

<title>Donation</title>

<?php require_once('database.php') ?>

    <link rel="stylesheet" href="scripts/donations_admin.css">


    <h3>Donate today!</h3>

<?php

if(!isset($_GET['sort'])){
    $sort = 'all';
}
else $sort = $_GET['sort'];


switch ($sort){
    case 'all':
        $query = 'SELECT * FROM donations ORDER BY donationID DESC'; break;
    case 'one_time':
        $query = 'SELECT * FROM donations WHERE regularity = \'One-time donation\' ORDER BY donationID DESC'; break;
    case 'every_day':
        $query = 'SELECT * FROM donations WHERE regularity = \'Every day donation\' ORDER BY donationID DESC'; break;
    case 'every_month':
        $query = 'SELECT * FROM donations WHERE regularity = \'Every month donation\' ORDER BY donationID DESC'; break;
    case 'every_year':
        $query = 'SELECT * FROM donations WHERE regularity = \'Every year donation\' ORDER BY donationID DESC'; break;
    default:
        $query = 'SELECT * FROM donations ORDER BY donationID DESC';
}



$statement = $db->prepare($query);
$statement->execute();
$row = $statement->fetchAll();
$statement->closeCursor();



// ---------- Decrypting ----------

$key = '(encrypt)-(decrypt)';

function decrypt($encrypted, $k) {

    $data = base64_decode($encrypted);
    $iv = substr($data, 0, mcrypt_get_iv_size(MCRYPT_RIJNDAEL_128, MCRYPT_MODE_CBC));

    $decrypted = rtrim(
        mcrypt_decrypt(
            MCRYPT_RIJNDAEL_128,
            hash('sha256', $k, true),
            substr($data, mcrypt_get_iv_size(MCRYPT_RIJNDAEL_128, MCRYPT_MODE_CBC)),
            MCRYPT_MODE_CBC,
            $iv
        ),
        "\0"
    );

    return $decrypted;
}

?>


    <h3>Information about donations</h3>

    <div id="donation_search_conditions">
        <p><b>Sort by regularity of donation:</b></p>
        <ul>
            <li><p> <a href="alex_donation_admin.php?sort=all">All donations</a></p></li>
            <li><p> <a href="alex_donation_admin.php?sort=one_time">One-time donation</a></p></li>
            <li><p> <a href="alex_donation_admin.php?sort=every_day">Every day donation</a></p></li>
            <li><p> <a href="alex_donation_admin.php?sort=every_month">Every month donation</a></p></li>
            <li><p> <a href="alex_donation_admin.php?sort=every_year">Every year donation</a></p></li>
        </ul>
    </div>

<?php
foreach ($row as $r){
    ?>

    <div class="donation_info">
        <div class="donation_id">
            <p><b>Donation ID: </b><?php echo $r['donationID'] ?></p>
        </div>
        <div class="donor_info">
            <p><b>Amount (CAD): </b><?php echo $r['amount']; ?></p>
            <p><b>Cardholder Name: </b>
                <?php
                $cardholder_name = $r['cardholderName'];
                $cardholder_name = decrypt($cardholder_name, $key);
                echo $cardholder_name;
                ?>
            </p>
            <p><b>Card Number: </b>
                <?php
                $card_number = $r['cardNumber'];
                $card_number = decrypt($card_number, $key);
                echo $card_number;
                ?>
            </p>
            <p><b>Expiry Date: </b>
                <?php
                $expiry_date = $r['expiryDate'];
                $expiry_date = decrypt($expiry_date, $key);
                echo $expiry_date;
                ?>
            </p>
            <p><b>CVS: </b>
                <?php
                $cvs = $r['cvs'];
                $cvs = decrypt($cvs, $key);
                echo $cvs;
                ?>
            </p>
            <p><b>Email: </b><?php echo $r['email']; ?></p>
            <p><b>Phone number: </b><?php echo $r['phoneNumber']; ?></p>
            <p><b>Regularity: </b><?php echo $r['regularity']; ?></p>
            <p><b>Status: </b><?php echo $r['status']; ?></p>
            <p><b>First Transaction: </b><?php echo $r['firstTransaction']; ?></p>
        </div>
        <div class="donation_admin_buttons">
            <form class="donation_admin_button" action="donation_update_form_admin.php" method="post">
                <input type="hidden" name="id" value="<?php echo $r['donationID']; ?>" />

                <input type="hidden" name="cardholder_name" value="<?php echo $cardholder_name; ?>" />
                <input type="hidden" name="card_number" value="<?php echo $card_number; ?>" />
                <input type="hidden" name="expiry_date" value="<?php echo $expiry_date; ?>" />
                <input type="hidden" name="cvs" value="<?php echo $cvs; ?>" />

                <input type="submit" value="Update" />
            </form>
            <form class="donation_admin_button" action="donation_delete_admin.php" method="post">
                <input type="hidden" name="id" value="<?php echo $r['donationID']; ?>" />
                <input type="submit" value="Delete" />
            </form>
        </div>
    </div>

    <?php
}
    ?>


<?php require_once '../content_bottom.php'; ?>