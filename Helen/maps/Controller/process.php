<?php

$name = $_POST['shop'];

$apiKey = "AIzaSyCaxUvW2WhaaIAEzosJ8nAVF-6gGE2jGhQ";
$main = "https://maps.googleapis.com/maps/api/";

$nearby_search = "place/nearbysearch/"; //поиск ближайших
$output = "json";

$rez_lat = 43.726535;
$rez_long = -79.605780;
$radius = 2000;


//$url = "https://maps.googleapis.com/maps/api/place/nearbysearch/json?location=43.726535,-79.605780&radius=2000&name=shoppers&key=AIzaSyCaxUvW2WhaaIAEzosJ8nAVF-6gGE2jGhQ";
$url = $main . $nearby_search . $output . "?location=". $rez_lat.",".$rez_long."&radius=".$radius."&name=".$name."&key=".$apiKey;
$resp_json = file_get_contents($url);
$resp = json_decode($resp_json, true);
//var_dump($resp);
/*if ($resp['results'][0]['opening_hours']['open_now'] == false){
    echo "Now closed";
}*/
?>

<div id="mapholder"></div>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
    <script type="text/javascript">
        var x = document.getElementById("demo");

        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(showPosition, showError);
        }
        else {
            x.innerHTML = "Geolocation is not supported by this browser.";
        }

        function showPosition(position) {
            lat = position.coords.latitude;
            lon = position.coords.longitude;
            latlon = new google.maps.LatLng(lat, lon);
            mapholder = document.getElementById('mapholder');
            mapholder.style.height = '400px';
            mapholder.style.width = '60%';
            var myOptions = {
                center: latlon,
                zoom: 14,
                mapTypeId: google.maps.MapTypeId.ROADMAP,
            };
            var map = new google.maps.Map(document.getElementById("mapholder"), myOptions);


            <?php
            $a = count($resp['results']);
            for ($i = 0; $i< $a; $i++){ ?>

            var image = '../images/m2.png';
            var marker = new google.maps.Marker({
                position: new google.maps.LatLng(<?php echo $resp['results'][$i]['geometry']['location']['lat'];?>, <?php echo $resp['results'][$i]['geometry']['location']['lng'];?>),
                map: map,
                icon: image
            });

            var info = new google.maps.InfoWindow({content: "<?php echo $i .") ". $resp['results'][$i]['vicinity']; ?>"});
            google.maps.event.addListener(marker, "click", function () {
                info.open(map, marker);
            });

            info.open(map, marker);
           <?php } ?>
            var image = '../images/m1.png';
            var marker = new google.maps.Marker({
                position: latlon,
                map: map,
                icon: image
            });
            var info = new google.maps.InfoWindow({content: "You are here"});
            google.maps.event.addListener(marker, "click", function () {
                info.open(map, marker);
            });

            info.open(map, marker);








        }
        function showError(error) {
            switch (error.code) {
                case error.PERMISSION_DENIED:
                    x.innerHTML = "User denied the request for Geolocation.";
                    break;
                case error.POSITION_UNAVAILABLE:
                    x.innerHTML = "Location information is unavailable.";
                    break;
                case error.TIMEOUT:
                    x.innerHTML = "The request to get user location timed out.";
                    break;
                case error.UNKNOWN_ERROR:
                    x.innerHTML = "An unknown error occurred.";
                    break;
            }
        }
    </script>


<ol>
    <?php
    $a = count($resp['results']);
    for ($i = 0; $i< $a; $i++) {
        echo "<li>" . $resp['results'][$i]['vicinity'] . "</li>";
        echo "
            <form action='../controller/directions.php' method='post'>
                <input type='hidden' name='latitude' value='".$resp['results'][$i]['geometry']['location']['lat']."' />
                <input type='hidden' name='longtitude' value='".$resp['results'][$i]['geometry']['location']['lng']."' />
                <input type='submit' value='Directions' />
            </form>
            ";
    }
        ?>
</ol>



