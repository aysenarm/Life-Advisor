<?php
include_once '../../../content_top.php';
//$latitudeOr = 43.729256;
//$longtitudeOr = -79.6090198;

$latitudeOr = $_POST['rezLat'];
$longtitudeOr = $_POST['rezLong'];


$latitudeDest = $_POST['latitude'];
$logtitudeDest = $_POST['longtitude'];

//echo $a . " and " . $b;

$apiKey = "AIzaSyCaxUvW2WhaaIAEzosJ8nAVF-6gGE2jGhQ";
$main = "https://maps.googleapis.com/maps/api/";
$distance = "distancematrix/";
$output = "json";
$modeDr = "driving";
$modeWl = "walking";
$modeBc = "bicycling";
$modeTr = "transit";

// https://maps.googleapis.com/maps/api/distancematrix/json?origins=43.729256,-79.6090198&destinations=43.7140758,-79.629973&language=en&mode=walking&key=AIzaSyCaxUvW2WhaaIAEzosJ8nAVF-6gGE2jGhQ
$url = $main . $distance . $output . "?origins=". $latitudeOr.",".$longtitudeOr."&destinations=".$latitudeDest.",".$logtitudeDest."&language=en&mode=".$modeDr."&key=".$apiKey;
$resp_json = file_get_contents($url);
$resp = json_decode($resp_json, true);
//var_dump($resp);
echo "From: ".$resp['origin_addresses'][0]."<br/>";
echo "To: ".$resp['destination_addresses'][0]."<br/>";
echo "Mode: ".$modeDr."<br/>";
echo "Distance: ".$resp['rows'][0]['elements'][0]['distance']['text']."<br/>";
echo "Duration: ".$resp['rows'][0]['elements'][0]['duration']['text']."<br/>";
?>

<div id="mapholder" style="width: 500px; height: 600px;"></div>
<div id="right-panel" style="width: 500px; height: 600px;"></div>

<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
    <script type="text/javascript">

        var map;

            var directionsService = new google.maps.DirectionsService;
            var directionsDisplay = new google.maps.DirectionsRenderer;
            map = new google.maps.Map(document.getElementById('mapholder'), {
                center: {lat: 43.729256, lng: -79.6090198},
                zoom: 20
            });



            directionsDisplay.setMap(map);
            directionsDisplay.setPanel(document.getElementById('right-panel'));

            calculateAndDisplayRoute(directionsService, directionsDisplay);

            function calculateAndDisplayRoute(directionsService, directionsDisplay) {
                directionsService.route({
                    origin: {lat: <?php echo $latitudeOr;?>, lng: <?php echo $longtitudeOr;?>},
                    destination: {lat: <?php echo $latitudeDest;?>, lng: <?php echo $logtitudeDest;?>},
                    travelMode: google.maps.TravelMode.DRIVING
                }, function (response, status) {
                    if (status === google.maps.DirectionsStatus.OK) {
                        directionsDisplay.setDirections(response);
                    } else {
                        window.alert('Directions request failed due to ' + status);
                    }
                });
            }
    </script>