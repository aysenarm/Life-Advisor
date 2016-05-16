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
<a href="autoposting.php">Send one more message</a>
<?else:?>

<form action="" method="POST" class="form-horizontal">
	<br/>

	<div class="form-group" style="margin-left: 10px;">
		<label class="col-sm-2 control-label" style="color: black">Your message:</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" name="message" value="<?=$message?>"/>
		</div>
		<br />
	</div>

	<div class="form-group" style="margin-left: 10px;">
		<label class="col-sm-2 control-label" style="color: black">Link:</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" name="url" value="<?=$url?>"/>
		</div>
		<br />
	</div>

  <input type="submit" name="send" value="Say" class="btn btn-default">
</form>
<?endif;?>