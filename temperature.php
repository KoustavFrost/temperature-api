<?php

$weather = "";
$error = "";

//API KEY:- 4b6f2b08a884f7924adce43cbc3c6191

if(isset($_GET['city'])) {

    $city = $_GET['city'];
    $urlContents = file_get_contents("http://api.openweathermap.org/data/2.5/weather?q=".urlencode($_GET['city'])."&appid=4b6f2b08a884f7924adce43cbc3c6191");

    $weatherArray = json_decode($urlContents, true);

    $desc = $weatherArray['weather'][0]['description'];
    $maxTemp = $weatherArray['main']['temp_max'] - 273;
    $minTemp = $weatherArray['main']['temp_min'] - 273;
    $pressure = $weatherArray['main']['pressure'];
    $humidity = $weatherArray['main']['humidity'];
    $cityName = $weatherArray['name'];
    $lat = $weatherArray['coord']['lat'];
    $lon = $weatherArray['coord']['lon'];

    
}

?>