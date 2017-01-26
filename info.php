<?php

require_once "Net/GeoIP.php";
$geoip = Net_GeoIP::getInstance("/Users/hollarab/code/php/adadapted/aa-core/data/geoip/GeoLiteCity.dat");

try {
    $location = $geoip->lookupLocation('192.69.23.17');
    echo("<p>Longmont: ".$location."</p>");

    $location = $geoip->lookupLocation('208.54.38.214');
    echo("<p>T-Mobile: ".$location."</p>");
    
    // $location = $geoip->lookupCountryName('192.69.23.17');
    // echo("<p>".$location."</p>");
    // $location = $geoip->lookupCountryCode('192.69.23.17');
    // echo("<p>".$location."</p>");
    $location = $geoip->lookupLocation('173.14.36.209');
    echo("<p>Chris: ".$location."</p>");


    $location = $geoip->lookupLocation('192.69.23.17');
    if(isset($location)) {
                echo($location->countryCode);
                // $location->region,
                // $location->city,
                // $location->postalCode,
                // $location->areaCode,
                // $location->latitude,
                // $location->longitude
        }
} catch (Exception $e) {
    echo($e);
}

phpinfo();

?>



   <!-- 31: echo $geoip->lookupCountryName("98.243.171.253");
  
   33: echo $geoip->lookupCountryCode("98.243.171.253"); -->
