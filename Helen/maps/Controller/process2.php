<?php
include_once '../../../content_top.php';

$apiKey = "AIzaSyCaxUvW2WhaaIAEzosJ8nAVF-6gGE2jGhQ";
$main = "https://maps.googleapis.com/maps/api/";

$nearby_search = "place/nearbysearch/"; //поиск ближайших
$output = "json";


$name = $_POST['shop'];
//echo $name."<br/>";
$type = $_POST['type'];
//echo $type."<br/>";
$radius = $_POST['radius'];
//echo $radius;

$rez_lat = $_POST['latitude'];
//echo $rez_lat."<br/>";
$rez_long = $_POST['longtitude'];
//echo $rez_long."<br/>";



if (isset($name) && isset($type)){
    $url = $main . $nearby_search . $output . "?location=". $rez_lat.",".$rez_long."&radius=".$radius."&name=".$name."&type=".$type."&key=".$apiKey;
}
elseif (!isset($name) && isset($type)){
    $url = $main . $nearby_search . $output . "?location=". $rez_lat.",".$rez_long."&radius=".$radius."&type=".$type."&key=".$apiKey;
}

$url = $main . $nearby_search . $output . "?location=". $rez_lat.",".$rez_long."&radius=".$radius."&name=".$name."&key=".$apiKey;
$resp_json = file_get_contents($url);
$resp = json_decode($resp_json, true);
//var_dump($resp);
?>



<!-- MAP IS SHOWING HERE-->
<div id="mapp" style="height: 500px; width: 600px; display: block;">here</div>


               <script>
                   var map;
                   function initMap() {
                       var myLatLng = {lat: <?php echo $rez_lat;?>, lng: <?php echo $rez_long;?>};

                    map = new google.maps.Map(document.getElementById('mapp'), {
                       center: myLatLng,
                       zoom: 15
                   });

                   var marker = new google.maps.Marker({
                       position: myLatLng,
                       map: map,
                       title: 'You are here'
                   });

                    <?php
                       $a = count($resp['results']);
                       for ($i = 0; $i< $a; $i++){
                       ?>
                       var image = '../images/m2.png';
                       var marker = new google.maps.Marker({
                           position: new google.maps.LatLng(<?php echo $resp['results'][$i]['geometry']['location']['lat'];?>, <?php echo $resp['results'][$i]['geometry']['location']['lng'];?>),
                           map: map,
                           title: image
                       });

                       var info = new google.maps.InfoWindow({content: "<?php echo $i .") ". $resp['results'][$i]['vicinity']; ?>"});
                       google.maps.event.addListener(marker, "click", function () {
                           info.open(map, marker);
                       });

                       info.open(map, marker);

                       <?php
                       }
                       ?>



                }

               </script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBb7YrWpzqGF4w_s03TUu_LnbvhjUKecx4&callback=initMap"
async defer></script>





<ol>
    <?php
    $a = count($resp['results']);
    for ($i = 0; $i< $a; $i++) {
        echo "<li>" . $resp['results'][$i]['vicinity'] . "</li>";
        echo "
            <form action='../Controller/directions.php' method='post'>
                <input type='hidden' name='rezLat' value='".$rez_lat."'/>
                <input type='hidden' name='rezLong' value='".$rez_long."'/>
                <input type='hidden' name='latitude' value='".$resp['results'][$i]['geometry']['location']['lat']."' />
                <input type='hidden' name='longtitude' value='".$resp['results'][$i]['geometry']['location']['lng']."' />
                <input type='submit' value='Directions' />
            </form>
            ";
    }
    ?>
</ol>
