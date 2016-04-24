<?php

// function to geocode address, it will return false if unable to geocode address
function geocode($address){

    // url encode the address
    $address = urlencode($address);


    $apiKey = "AIzaSyCaxUvW2WhaaIAEzosJ8nAVF-6gGE2jGhQ";
    $main = "https://maps.googleapis.com/maps/api/";
    $geocode = "geocode/"; // перевод адреса в широту и долготу
    $output = "json";
    $region = "&region=ca";
    // google map geocode api url
    $url = $main . $geocode . $output . "?address=". $address. $region . "&key=".$apiKey;

   // $url = "http://maps.google.com/maps/api/geocode/json?address={$address}";

    // get the json response
    $resp_json = file_get_contents($url);

    // decode the json
    $resp = json_decode($resp_json, true);

    // response status will be 'OK', if able to geocode given address
    if($resp['status']=='OK'){
       // var_dump($resp);
      //  echo count($resp['results']);
        $data_arr = array();
        for ($i = 0; $i< count($resp['results']); $i++) {
            // get the important data
            $lati = $resp['results'][$i]['geometry']['location']['lat'];
            $longi = $resp['results'][$i]['geometry']['location']['lng'];
            $formatted_address = $resp['results'][$i]['formatted_address'];

            array_push(
                $data_arr,
                $lati,
                $longi,
                $formatted_address
            );
        }



       // var_dump($data_arr);

            return $data_arr;

        }else{
            return false;
        }

}
?>