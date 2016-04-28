
<?php
require_once '../../content_top.php';
?>
<a class="twitter-timeline" href="https://twitter.com/lifeadvisorteam" data-widget-id="725484592023638016">Tweets by @lifeadvisorteam</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
<?php
require "twitteroauth/autoload.php";
use Abraham\TwitterOAuth\TwitterOAuth;
$twitteruser = "lifeadvisorteam"; //user name you want to reference
$notweets = 5; //how many tweets you want to retrieve
$consumerkey = "urACAjRte1bhrHjEgxi47ZFSB";
$consumersecret = "34dhCbGG3EaI2FSJfKr10VlfumGjYMkMmbRi3isAYdP5j8AoIW";
$accesstoken = "719996763868958720-EZqpZZxu2eaFxuL7HRFoU78EZnwr51x";
$accesstokensecret = "NlTTyfsXUxfzl7g2BAy3wHk7q9AZeKJd8Y6QaWSip7Hnp";

$connection = new TwitterOAuth($consumerkey, $consumersecret, $accesstoken, $accesstokensecret);

$tweets = $connection->get("statuses/user_timeline",["count" => $notweets, "screen_name" => $twitteruser]);
$post = $connection->post('statuses/update', array('status' => 'my first tweet using twitter app'));
//print_r($post);
foreach($tweets as $items)
{
    echo "Time and Date of Tweet: ".$items->created_at."<br />";
    echo "Tweet: ". $items->text."<br />";
    echo "Tweeted by: ". $items->user->name."<br />";
    echo "Screen name: ". $items->user->screen_name."<br /><hr />";
    //echo "Followers: ". $items->user->followers_count."<br />";
    //echo "Friends: ". $items->user->friends_count."<br />";
    //echo "Listed: ". $items->user->listed_count."<br />;

}
$user = $connection->get("account/verify_credentials");
//echo $user->screen_name;

?>


