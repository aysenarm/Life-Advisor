<?php
$latitudeOr = 43.729256;
$longtitudeOr = -79.6090198;

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
$url = $main . $distance . $output . "?origins=". $latitudeOr.",".$longtitudeOr."&destinations=".$latitudeDest.",".$logtitudeDest."&language=en&mode=".$modeWl."&key=".$apiKey;
$resp_json = file_get_contents($url);
$resp = json_decode($resp_json, true);
//var_dump($resp);
echo "From: ".$resp['origin_addresses'][0]."<br/>";
echo "To: ".$resp['destination_addresses'][0]."<br/>";
echo "Mode: ".$modeWl."<br/>";
echo "Distance: ".$resp['rows'][0]['elements'][0]['distance']['text']."<br/>";
echo "Duration: ".$resp['rows'][0]['elements'][0]['duration']['text']."<br/>";
?>

<div id="mapholder"></div>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
    <script type="text/javascript">

            latlon = new google.maps.LatLng(<?php echo $latitudeOr ?>, <?php echo $longtitudeOr?>);
            mapholder = document.getElementById('mapholder');
            mapholder.style.height = '400px';
            mapholder.style.width = '60%';
            var myOptions = {
                center: latlon,
                zoom: 14,
                mapTypeId: google.maps.MapTypeId.ROADMAP,
            };
            var map = new google.maps.Map(mapholder, myOptions);


            // Marker for place FROM where we see the distance
            var image = '../images/m1.png';
            var marker = new google.maps.Marker({
                position: latlon,
                map: map,
                icon: image
            });
            var info = new google.maps.InfoWindow({content: "From"});
            google.maps.event.addListener(
                marker, "click",
                function () {
                    info.open(map, marker);
                });


            // Marker for place TO where we see the distance
            var image2 = '../images/m2.png';
            var marker2 = new google.maps.Marker({
                position: new google.maps.LatLng(<?php echo $latitudeDest ?>, <?php echo $logtitudeDest?>),
                map: map,
                icon: image2
            });
            var info2 = new google.maps.InfoWindow({content: "From"});
            google.maps.event.addListener(
                marker2, "click",
                function () {
                    info.open(map, marker);
                });

    </script>
