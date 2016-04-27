<?php
  include_once '../../../content_top.php'; ?>


<div id="mapp" style="height: 500px; width: 500px; display: block;">here</div>


               <script>
                   var map;
                   function initMap() {
                       var myLatLng = {lat: -25.363, lng: 131.044};

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



