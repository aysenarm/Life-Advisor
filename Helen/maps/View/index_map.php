<?php
require_once '../../../content_top.php';
require "../Controller/map.php"; ?>




<?php

// ----------------- If address was not get automatically and search form was submitted do this --------------------
if($_POST){
?>

    <?php

    // get latitude, longitude and formatted address
    $address = $_POST['address'];
   // echo $address;
    $data_arr = geocode($address);

    // if able to geocode the address
    if($data_arr){

        $latitude = $data_arr[0];
        $longitude = $data_arr[1];
        $formatted_address = $data_arr[2];


        ?>


<p> We got your address it's: <?php echo $data_arr[2]?></p>
<div>
    <a href="#" onclick="openbox('box'); return false"><button>This is not my address</button></a>
    </div>

    <div id="box" style="display: none;">
        <?php for ($i = 0; $i< count($data_arr); $i= $i + 3) { ?>
            <p><?php $three = $i + 2;
                echo $data_arr[$three] ?></p>
            <form action="" method="post">
                <input type='hidden' name='address' value="<?php echo $data_arr[$three]; ?>"/>
                <input type='submit' value='I am here' />
            </form>
            <br/>
        <?php }?>
    </div>

    <script type="text/javascript">
        function openbox(id){
            display = document.getElementById(id).style.display;
            if(display=='none'){
                document.getElementById(id).style.display='block';
            }else{
                document.getElementById(id).style.display='none';
            }
        }
    </script>




    <!-- google map will be shown here -->
    <br/>
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

// ----------------- If user allowed to get his info from browser, do this --------------------
else {


    require_once "../Controller/map_allow.php";
    ?>



    <?php
    }
require_once '../../../content_bottom.php';