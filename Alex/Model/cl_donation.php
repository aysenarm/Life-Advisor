<?php

    class Donation_feature{

        public function __construct() {

        }

//----------donation_add.php----------

        //---Insert information about donation into DB---

        public function da($db, $amount, $cardholder_name, $card_number, $expiry_date, $cvs, $email, $phone, $status, $first_transaction, $regularity){
            $query = "INSERT INTO donations
                (amount, cardholderName, cardNumber, expiryDate, cvs, email, phoneNumber, regularity, status, firstTransaction)
              VALUES
                (:amount, :cardholder_name, :card_number, :expiry_date, :cvs, :email, :phone, :regularity, :status, :first_transaction)";

            $statement = $db->prepare($query);
            $statement->bindValue(':amount', $amount);
            $statement->bindValue(':cardholder_name', $cardholder_name);
            $statement->bindValue(':card_number', $card_number);
            $statement->bindValue(':expiry_date', $expiry_date);
            $statement->bindValue(':cvs', $cvs);
            $statement->bindValue(':email', $email);
            $statement->bindValue(':phone', $phone);
            $statement->bindValue(':status', $status);
            $statement->bindValue(':first_transaction', $first_transaction);
            $statement->bindValue(':regularity', $regularity);

            $statement->execute();
            $statement->closeCursor();
        }


//----------donation_delete_admin.php----------

        //---Delete information about Donation from DB---

        public function dda($db, $id){

            $query = "DELETE FROM donations WHERE donationID = :id";
            $db->exec($query);

            $statement = $db->prepare($query);
            $statement->bindValue(':id', $id);
            $statement->execute();
            $statement->closeCursor();

        }


//----------donation_update_admin.php----------

    //---Update information about Donation in DB---

    public function dua($db, $id, $amount, $cardholder_name, $card_number, $expiry_date, $cvs, $email, $phone, $status, $first_transaction, $regularity){

        $query = "UPDATE donations SET
                amount = :amount,
                cardholderName = :cardholder_name,
                cardNumber = :card_number,
                expiryDate = :expiry_date,
                cvs = :cvs,
                email = :email,
                phoneNumber = :phone,
                status = :status,
                firstTransaction = :first_transaction,
                regularity = :regularity
            WHERE donationID = :id ";

        $statement = $db->prepare($query);
        $statement->bindValue(':id', $id);
        $statement->bindValue(':amount', $amount);
        $statement->bindValue(':cardholder_name', $cardholder_name);
        $statement->bindValue(':card_number', $card_number);
        $statement->bindValue(':expiry_date', $expiry_date);
        $statement->bindValue(':cvs', $cvs);
        $statement->bindValue(':email', $email);
        $statement->bindValue(':phone', $phone);
        $statement->bindValue(':status', $status);
        $statement->bindValue(':first_transaction', $first_transaction);
        $statement->bindValue(':regularity', $regularity);

        $statement->execute();
        $statement->closeCursor();

    }

//----------donation_update_form_admin.php----------

    //---Get information from DB to edit donation---

    public function dufa($db, $id){

        $query = 'SELECT * FROM donations WHERE donationID = :id';
        $statement = $db->prepare($query);
        $statement->bindValue(':id', $id);
        $statement->execute();
        $row = $statement->fetch();
        $statement->closeCursor();

        return $row;

    }


    }

?>