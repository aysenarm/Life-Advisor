<?php
error_reporting(0);
header('Content-Type: text/html; charset= utf-8');
use Abraham\TwitterOAuth\TwitterOAuth;
require_once '../../content_top.php';

$message = '';
$url = '';

if(isset($_POST['send'])){
    $message = isset($_POST['message']) ? trim($_POST['message']) : '' ;
    $url = isset($_POST['url']) ? trim($_POST['url']) : '' ;
    if(isset($_POST['message'])&&$_POST['message']!=""){

		require "twitteroauth/autoload.php";

		$connection = new TwitterOAuth(
		"urACAjRte1bhrHjEgxi47ZFSB",
		"34dhCbGG3EaI2FSJfKr10VlfumGjYMkMmbRi3isAYdP5j8AoIW",
		"719996763868958720-EZqpZZxu2eaFxuL7HRFoU78EZnwr51x",
		"NlTTyfsXUxfzl7g2BAy3wHk7q9AZeKJd8Y6QaWSip7Hnp"
	);	
	
	if(trim($_POST['url'])!="")	$delimetr = " : "; 
	  $connection->post('statuses/update', array(
	  'status' => $_POST['message'] . $delimetr . $_POST['url'], 
	  'entities' => array("urls" => array("url" => $_POST['url'],)
					    )
					));
	  $msg="Sent message: <br/>".$_POST['message'];
	}
  }

?>

<?if($msg):?>
<?echo $msg;?>
<br/>
<a href="http://127.0.0.1/xmllabs/twitterapp/autoposting.php">Send one more message</a>
<?else:?>

<form action="" method="POST">
  Your message:<br/>
  <input type="text" name="message" value="<?=$message?>"/>
  <br/>
  Link:
  <br/>
  <input type="text" name="url" value="<?=$url?>"/>
  <br/>
  <input type="submit" name="send" value="Say">
</form>
<?endif;?>