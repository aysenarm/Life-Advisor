<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">

    <link href="style-map.css" rel="stylesheet">
</head>
<body>
<?php
require "../Controller/map.php"; ?>
<div id='address-examples'>
    <div>Please, enter your address:</div>
</div>

<!-- enter any address -->
<form action="" method="post">
    <input type='text' name='address' placeholder='Enter any address here'/>
    <input type='submit' value='Ok' />
</form>

<form action="../controller/process.php" method="post">
    <div>Please name of the shops you are looking for:</div>
    <input type='text' name='shop' placeholder='Enter shop name' />
    <input type='submit' value='Ok' />
</form>

<br />
<br />

<div id="mapholder"></div>

<?php
// -----------------  Если адрес не определен АВТОМАТИЧЕСКИ и форма отправлена, выполняем этот код --------------------
if($_POST){

    // get latitude, longitude and formatted address
    $address = $_POST['address'];
    $data_arr = geocode($address);

    // if able to geocode the address
    if($data_arr){

        $latitude = $data_arr[0];
        $longitude = $data_arr[1];
        $formatted_address = $data_arr[2];
        ?>

        <!-- google map will be shown here -->
        <div id="gmap_canvas">Loading map...</div>
        <div id='map-label'>Map shows approximate location.</div>

        <!-- JavaScript to show google map -->
        <script type="text/javascript" src="http://maps.google.com/maps/api/js"></script>
        <script type="text/javascript">
           mapholder.style.display = "none";
            function init_map() {
                var myOptions = {
                    zoom: 14,
                    center: new google.maps.LatLng(<?php echo $latitude; ?>, <?php echo $longitude; ?>),
                    mapTypeId: google.maps.MapTypeId.ROADMAP
                };
                map = new google.maps.Map(document.getElementById("gmap_canvas"), myOptions);
                var image = '../images/m1.png';
                marker = new google.maps.Marker({
                    map: map,
                    animation: google.maps.Animation.DROP,
                    icon: image,
                    position: new google.maps.LatLng(<?php echo $latitude; ?>, <?php echo $longitude; ?>)
                });
                infowindow = new google.maps.InfoWindow({
                    content: "You are here"
                });
                google.maps.event.addListener(marker, "click", function () {
                    infowindow.open(map, marker);
                });
                infowindow.open(map, marker);
            }
            google.maps.event.addDomListener(window, 'load', init_map);
        </script>

        <?php

        // if unable to geocode the address
    }else{
        echo "No map found.";
    }
}
else {
?>


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
                center: latlon, zoom: 14,
                mapTypeId: google.maps.MapTypeId.ROADMAP,
            };
            var map = new google.maps.Map(document.getElementById("mapholder"), myOptions);
            var image = '../images/m1.png';
            var marker = new google.maps.Marker({
                position: latlon,
                map: map,
                icon: image,
                animation: google.maps.Animation.DROP
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
    <br/>
    <?php
    }
?>




</body>
</html>