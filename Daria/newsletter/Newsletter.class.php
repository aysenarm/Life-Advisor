<?php
class Newsletter
{
    private static $email;
    private static $datetime = null;

    private static $valid = true;

    public function __construct()
    {
        die('Init function is not allowed');
    }

    public static function register($email)
    {
        if (!empty($_POST)) {
            self::$email = $_POST['signup-email'];
            self::$datetime = date('Y-m-d H:i:s');

            if (empty(self::$email)) {
                $status = "error";
                $message = "<p style='color: white;'>The email address field must not be blank</p>";
                self::$valid = false;
            } else if (!filter_var(self::$email, FILTER_VALIDATE_EMAIL)) {
                $status = "error";
                $message = "<p style='color: white;'>You must fill the field with a valid email address</p>";
                self::$valid = false;
            }

            if (self::$valid) {
                $pdo = Database::connect();
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $existingSignup = $pdo->prepare("SELECT COUNT(*) FROM signups WHERE signup_email_address='$email'");
                $existingSignup->execute();
                $data_exists = ($existingSignup->fetchColumn() > 0) ? true : false;

                if (!$data_exists) {
                    $sql = "INSERT INTO signups (signup_email_address, signup_date) VALUES (:email, :datetime)";
                    $q = $pdo->prepare($sql);

                    $q->execute(
                        array(':email' => self::$email, ':datetime' => self::$datetime));

                    if ($q) {
                        $status = "success";
                        $message = "<p style='color: white;'>You have been successfully subscribed</p>";
                    } else {
                        $status = "error";
                        $message = "<p style='color: white;'>An error occurred, please try again</p>";
                    }
                } else {
                    $status = "error";
                    $message = "<p style='color: white;'>This email is already subscribed</p>";
                }
            }

            $data = array(
                'status' => $status,
                'message' => $message
            );

            return json_encode($data);

            Database::disconnect();
        }
    }
}