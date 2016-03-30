<?php require_once '../content_top.php'; ?>

<title>Donation</title>

<?php require_once('database.php') ?>

    <link rel="stylesheet" href="scripts/donations.css">

<?php

$id = $_POST['id'];
$cardholder_name = $_POST['cardholder_name'];
$card_number = $_POST['card_number'];
$expiry_date = $_POST['expiry_date'];
$cvs = $_POST['cvs'];


$query = 'SELECT * FROM donations WHERE donationID = :id';
$statement = $db->prepare($query);
$statement->bindValue(':id', $id);
$statement->execute();
$row = $statement->fetch();
$statement->closeCursor();

?>


    <h3>Update Donation</h3>

    <form action="donation_update_admin.php" method="post">

        <!---------- ID ---------->

        <div class="donation_form_field">
            <div class="donation_form_label">
                <label>ID: <span class="donation_form_star">*</span></label>
            </div>
            <div class="donation_form_input">
                <input type="text" name="id" value="<?php echo $id ?>" readonly style="background-color:#d3d3d3;"/>
            </div>
        </div>

        <!---------- Amount ---------->

        <div class="donation_form_field">
            <div class="donation_form_label">
                <label>Amount (CAD): <span class="donation_form_star">*</span></label>
            </div>
            <div class="donation_form_input">
                <input type="text" pattern="^[0-9]+$" title="Amount should contain only digits" required name="amount" value="<?php echo $row['amount'] ?>"/>
            </div>
        </div>

        <!---------- Cardholder Name ---------->

        <div class="donation_form_field">
            <div class="donation_form_label">
                <label>Cardholder Name: <span class="donation_form_star">*</span></label>
            </div>
            <div class="donation_form_input">
                <input type="text" pattern="^[a-zA-Z ]+$" title="Cardholder Name should contain only letters and spaces" required name="cardholder_name" value="<?php echo $cardholder_name ?>"/>
            </div>
        </div>

        <!---------- Card Number ---------->

        <div class="donation_form_field">
            <div class="donation_form_label">
                <label>Card Number: <span class="donation_form_star">*</span></label>
            </div>
            <div class="donation_form_input">
                <input type="text" pattern="[0-9]{16}" title="Card number should contain 16 digits" required name="card_number" maxlength="16" size="16" value="<?php echo $card_number ?>"/>
            </div>
        </div>

        <!---------- Expiry Date ---------->

        <div class="donation_form_field">
            <div class="donation_form_label">
                <label>Expiry Date: <span class="donation_form_star">*</span></label>
            </div>
            <div class="donation_form_input">
                <input type="text" pattern="[0-9]{4}" title="Expiry Date should contain 4 numbers (MMYY)" required name="expiry_date" maxlength="4" size="4" value="<?php echo $expiry_date ?>"/>
            </div>
        </div>

        <!---------- CVS ---------->

        <div class="donation_form_field">
            <div class="donation_form_label">
                <label>CVS: <span class="donation_form_star">*</span></label>
            </div>
            <div class="donation_form_input">
                <input type="text" pattern="[0-9]{3}" title="CVS should contain 3 numbers" required name="cvs" maxlength="3" size="3" value="<?php echo $cvs ?>"/>
            </div>
        </div>

        <!---------- Email ---------->

        <div class="donation_form_field">
            <div class="donation_form_label">
                <label>Email: <span class="donation_form_star">*</span></label>
            </div>
            <div class="donation_form_input">
                <input type="email" name="email" required value="<?php echo $row['email'] ?>"/>
            </div>
        </div>

        <!---------- Phone number ---------->

        <div class="donation_form_field">
            <div class="donation_form_label">
                <label>Phone number: <span class="donation_form_star">*</span></label>
            </div>
            <div class="donation_form_input">
                <input type="tel" pattern="^\d{3}-\d{3}-\d{4}$" title="Phone number should be in a format: 123-456-7890" required name="phone" value="<?php echo $row['phoneNumber'] ?>"/>
            </div>
        </div>

        <!---------- Status ---------->

        <div class="donation_form_field">
            <div class="donation_form_label">
                <label>Status: <span class="donation_form_star">*</span></label>
            </div>
            <div class="donation_form_input">
                <select name="status">
                    <option value="Open">Open</option>
                    <option value="Closed">Closed</option>
                </select>

            </div>
        </div>

        <!---------- First Transaction ---------->

        <div class="donation_form_field">
            <div class="donation_form_label">
                <label>First Transaction: <span class="donation_form_star">*</span></label>
            </div>
            <div class="donation_form_input">
                <input type="text" name="first_transaction" value="<?php echo $row['firstTransaction'] ?>" readonly
                       style="background-color:#d3d3d3;"/>
            </div>
        </div>

        <!---------- Regularity of Donation ---------->

        <div class="donation_form_radio">
            <div class="donation_form_label">
                <label>Regularity of Donation: <span class="donation_form_star">*</span></label>
            </div>
            <div class="donation_form_input">
                <input type="radio" name="regularity" value="One-time donation" checked/>One-time donation<br/>
                <input type="radio" name="regularity" value="Every day donation"/>Every day donation<br/>
                <input type="radio" name="regularity" value="Every month donation"/>Every month donation<br/>
                <input type="radio" name="regularity" value="Every year donation"/>Every year donation<br/>
            </div>
        </div>

        <!---------- Update Button ---------->

        <div class="donation_form_button">
            <label>&nbsp;</label>
            <input type="submit" value="Update Information"/>
        </div>

    </form>



<?php require_once '../content_bottom.php'; ?>