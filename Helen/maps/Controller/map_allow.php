<?php
// ----------------- If user allowed to get his info from browser, do this --------------------

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

            sessionStorage.setItem("latitude",lat);
            sessionStorage.setItem("longtitude",lon);


           /* latlon = new google.maps.LatLng(lat, lon);
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
            */
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



 // ------ code to reload the page and set get variables to get an oppotunity to use them in PHP
        function setCookie (name, value)
        {
            document.cookie = name + "=" + escape(value);
        }

        function getCookie(name)
        {
            var cookie = " " + document.cookie;
            var search = " " + name + "=";
            var setStr = null;
            var offset = 0;
            var end = 0;
            if (cookie.length > 0)
            {
                offset = cookie.indexOf(search);
                if (offset != -1)
                {
                    offset += search.length;
                    end = cookie.indexOf(";", offset)
                    if (end == -1)
                    {
                        end = cookie.length;
                    }
                    setStr = unescape(cookie.substring(offset, end));
                }
            }
            return(setStr);
        }
        function delCookie(name) {
            document.cookie = name + "=" + "; expires=Thu, 01 Jan 1970 00:00:01 GMT";
        }

        var cookie = getCookie('reload');

        if (cookie == null)
        { setCookie('reload', 0);}

        var reload = getCookie('reload');

        if (reload == 0)
        {
            setCookie('reload', 1);
            // обновляем страницу
            window.location.replace('http://life-adviser.hryshkova.com/Life-Advisor/Helen/maps/View/index_map.php?lat=' + sessionStorage.getItem('latitude'));
        }
        if (reload == 1)
        {
            setCookie('reload', 2);
            // обновляем страницу
            window.location.replace('http://life-adviser.hryshkova.com/Life-Advisor/Helen/maps/View/index_map.php?lat=' + sessionStorage.getItem('latitude'));
        }



// ------ END of the code to reload the page and set get variables to get an oppotunity to use them in PHP


    </script>
 <!--   <br/>

    <div style="border: dashed; width: 50%;">
        <form action="../controller/process.php" method="post">
            <div>Please name of the shops you are looking for:</div>
            <input type='text' name='shop' placeholder='Enter shop name' />
            <div>And / Or choose the type of the place needed:</div>
            <select name="type">
                <?php /*
                $types = array( "accounting", "airport", "amusement_park", "aquarium", "art_gallery", "atm", "bakery", "bank", "bar", "beauty_salon",
                    "bicycle_store", "book_store", "bowling_alley", "bus_station", "cafe", "campground", "car_dealer", "car_rental",
                    "car_repair", "car_wash", "casino", "cemetery", "church", "city_hall", "clothing_store", "convenience_store", "courthouse",
                    "dentist", "department_store", "doctor", "electrician", "electronics_store", "embassy", "establishment", "finance",
                    "fire_station", "florist", "food", "funeral_home", "furniture_store", "gas_station", "general_contractor", "grocery_or_supermarket",
                    "gym", "hair_care", "hardware_store", "health", "hindu_temple", "home_goods_store", "hospital", "insurance_agency",
                    "jewelry_store", "laundry", "lawyer", "library", "liquor_store", "local_government_office", "locksmith", "lodging",
                    "meal_delivery", "meal_takeaway", "mosque", "movie_rental", "movie_theater", "moving_company", "museum", "night_club",
                    "painter", "park", "parking", "pet_store", "pharmacy", "physiotherapist", "place_of_worship", "plumber", "police",
                    "post_office", "real_estate_agency", "restaurant", "roofing_contractor", "rv_park", "school", "shoe_store", "shopping_mall",
                    "spa", " stadium", "storage", "store", "subway_station", "synagogue", "taxi_stand", "train_station", "travel_agency", "university",
                    "veterinary_care", "zoo" );
                foreach ($types as $type){
                    ?>
                    <option value="<?php echo $type?>"><?php echo $type?></option>
                    <?php
                }
                ?>
</select>

<div>Select radius of search: <span style="color: red">*</span></div>
<input type="radio" name="radius" value="2000" checked> 2 km
<input type="radio" name="radius" value="5000"> 5 km
<input type="radio" name="radius" value="10000"> 10 km
<input type="radio" name="radius" value="20000"> 20 km
<input type="radio" name="radius" value="30000"> 30 km
<input type="radio" name="radius" value="50000"> 50 km


<input type="hidden" name="latitude" value="<?php //echo $latitude?>">
<input type="hidden" name="longtitude" value="<?php //echo $longitude */ ?>">


<input type='submit' value='Search' />
</form>
</div>

<br />
<br />
 -->