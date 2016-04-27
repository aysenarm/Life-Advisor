<?php
  include_once '../../../content_top.php';
require "../Controller/map.php";

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





<!-- MAP IS SHOWING HERE-->
<div id="mapp" style="height: 500px; width: 500px; display: block;">here</div>


               <script>
                   var map;
                   function initMap() {
                       var myLatLng = {lat: <?php echo $latitude;?>, lng: <?php echo $longitude;?>};

                       map = new google.maps.Map(document.getElementById('mapp'), {
                           center: myLatLng,
                           zoom: 15
                       });

                       var marker = new google.maps.Marker({
                           position: myLatLng,
                           map: map,
                           title: 'You are here'
                       });
                   }

               </script>
               <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBb7YrWpzqGF4w_s03TUu_LnbvhjUKecx4&callback=initMap"
                       async defer></script>


<?php
    }else{
        echo "No map found.";
    }
