<?php
require_once '../Database.class.php';

class NewsletterDB{
    public function __construct() {

    }
    public static function deleteNewsletter($id){

        $db = Database::connect();
        $query = "DELETE FROM newsletter WHERE id = :id";
        $stm = $db->prepare($query);
        $stm->bindParam(':id', $id);

        $count = $stm->execute();
        $id= 25;
        return "Deleted rows: " . $count;
    }
    public static function updateNewsletter($id,$subject,$semail,$content,$time,$status){

        $db = Database::connect();
        $query = "UPDATE newsletter
                    SET
                    subject = :subject,
                    sender_email = :semail,
                    description = :content,
                    time = :time,
                    status = :status
                      WHERE id = :id ";
        $stm = $db->prepare($query);
        $stm->bindParam(':id', $id);
        $stm->bindParam(':subject', $subject, PDO::PARAM_STR, 50);
        $stm->bindParam(':semail', $semail, PDO::PARAM_STR, 200);
        $stm->bindParam(':content', $content, PDO::PARAM_STR, 200);
        $stm->bindParam(':time', $time, PDO::PARAM_STR, 200);
        $stm->bindParam(':status', $status, PDO::PARAM_STR, 200);
        $count = $stm->execute();
        return "Updated rows: " . $count;
    }


}

