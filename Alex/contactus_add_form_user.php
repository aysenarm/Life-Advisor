<?php require_once '../content_top.php'; ?>

    <title>Contact Us</title>



<?php
    if(isset($_SESSION['user_session'])) {

        $rez = $user->userInfo($_SESSION['user_session']);
        $_SESSION['role'] = $rez['Rights'];

?>



        <?php require_once('database.php') ?>

        <link rel="stylesheet" href="scripts/contactus.css">

        <?php  $user_id = $rez['ID_user']; ?>

        <?php

//---------- Query (shows only user questions) ---------->
        require_once "Model/cl_contactus.php";
        $contactus_feature = new Contactus_feature();
        $row = $contactus_feature->cafu($user_id, $db);


        ?>

        <h3>Do you have a question? Ask it <?php echo $rez['Username']; ?>!</h3>

        <form action="contactus_add_user.php" method="post">

            <!---------- User ID ---------->

            <input type="hidden" name="user_id" value="<?php echo $user_id ?>"/>


            <!---------- Question ---------->

            <div class="contactus_form_field">
                <div class="contactus_form_lable">
                    <label>Question: <span class="contactus_form_star">*</span></label>
                </div>
                <div class="contactus_form_input">
                    <textarea cols="40" rows="5" name="question"></textarea>
                </div>
            </div>

            <!---------- Category of question ---------->

            <div class="contactus_form_field">
                <div class="contactus_form_lable">
                    <label>Category of question: <span class="contactus_form_star">*</span></label>
                </div>
                <div class="contactus_form_input">
                    <select name="category">
                        <option value="General">General</option>
                        <option value="Recipes">Recipes</option>
                        <option value="House">House</option>
                        <option value="Health">Health</option>
                        <option value="Finances">Finances</option>
                        <option value="People">People</option>
                    </select>
                </div>
            </div>

            <!---------- Question Date ---------->

            <input type="hidden" name="question_date" value="<?php echo strftime("%Y-%m-%d") ?>"/>

            <!---------- Add Button ---------->

            <div class="contactus_form_button">
                <label>&nbsp;</label>
                <input type="submit" value="Ask the question" />
            </div>

        </form>

        <!---------- Questions and Answers ---------->

        <?php
        foreach ($row as $r) {
            ?>
            <div class="contactus_q_a">
                <div class="contactus_category">
                    <p><b>Category: </b><?php echo $r['category']; ?></p>
                    <p>| <?php echo $r['questionDate']; ?> |</p>
                </div>
                <div class="contactus_question">
                    <p><b>Question:</b></p>
                    <p><?php echo $r['question']; ?></p>
                </div>
                <div class="contactus_answer">
                    <p><b>Answer:</b></p>
                    <p><?php echo $r['answer']; ?></p>
                    <p><?php echo $r['answerDate']; ?></p>
                </div>
                <div class="contactus_admin_buttons">
                    <form class="contactus_admin_button_delete" action="contactus_delete_user.php" method="post">
                        <input type="hidden" name="question_id" value="<?php echo $r['questionID']; ?>" />
                        <input type="submit" value="Delete" />
                    </form>
                </div>
            </div>

            <?php
        }
        ?>





<?php
    }
    else {
        echo "<h2>We are sorry, but you have to be logged in to see this page,
    please log in <a href='http://localhost/Life-Advisor/Antonio/login/View/login-form.php'>here</a></h2>";
    }
?>



<?php require_once '../content_bottom.php'; ?>