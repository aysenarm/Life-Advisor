<?php
$apiKey = "AIzaSyCaxUvW2WhaaIAEzosJ8nAVF-6gGE2jGhQ";


$main = "https://maps.googleapis.com/maps/api/";
$place_search = "place/autocomplete/"; // поиск места по слову
$nearby_search = "place/nearbysearch/"; //поиск ближайших
$geocode = "geocode/"; // перевод адреса в широту и долготу
$output = "json";
$region = "&region=ca";



// ---------------- getting places that contain matching word -----------------------------
$inp = "Amoeba";
$latitude = 37.76999;
$longitude = -122.44696;

// normal working address
//$url = "https://maps.googleapis.com/maps/api/place/autocomplete/json?input=Amoeba&types=establishment&location=37.76999,-122.44696&radius=500&key=AIzaSyCaxUvW2WhaaIAEzosJ8nAVF-6gGE2jGhQ";
$url = $main . $place_search. $output. "?input=" . $inp . "&types=establishment&location=".$latitude.",".$longitude."&radius=500&key=" . $apiKey;

$resp_json = file_get_contents($url);
$resp = json_decode($resp_json, true);
//var_dump($resp);

//echo $resp['predictions'][0]['description'] . "</br>";
//echo $resp['predictions'][0]['id']. "</br>";
//echo $resp['predictions'][0]['matched_substrings'][0]['length'];


// ---------------- getting nearby places searching by name -----------------------------
$rez_lat = 43.726535;
$rez_long = -79.605780;
$name = "shoppers";

//$url = "https://maps.googleapis.com/maps/api/place/nearbysearch/json?location=43.726535,-79.605780&radius=500&rankby=distance&name=shoppers&key=AIzaSyCaxUvW2WhaaIAEzosJ8nAVF-6gGE2jGhQ";
$url2 = $main . $nearby_search . $output . "?location=". $rez_lat.",".$rez_long."&radius=5000&name=".$name."&key=".$apiKey;
$resp_json2 = file_get_contents($url2);
$resp2 = json_decode($resp_json2, true);
//var_dump($resp2);


// ---------------- getting latitude and longtitude for typed place -----------------------------
$address = urlencode("203 Humber College Blvd.");
//$url3="https://maps.googleapis.com/maps/api/geocode/json?address=".$address."&region=ca&key=AIzaSyCaxUvW2WhaaIAEzosJ8nAVF-6gGE2jGhQ";
$url3 = $main . $geocode . $output . "?address=". $address. $region . "&key=".$apiKey;
$resp_json3 = file_get_contents($url3);
$resp3 = json_decode($resp_json3, true);
var_dump($resp3);

$lati = $resp3['results'][0]['geometry']['location']['lat'];
echo $lati;
$longi = $resp3['results'][0]['geometry']['location']['lng'];
echo $longi;
$formatted_address = $resp3['results'][0]['formatted_address'];
echo $formatted_address;