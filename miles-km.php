<?php

// number in miles we want to convert to kilometers
// floating point value for the pound to Kilograms conversion

echo "How many miles do you want to convert? ";
$miles = (float)fgets(STDIN);
$convert = 1.60934;
$miles_to_km = $miles * $convert;
$km = 30;
$km_to_miles = $km / $convert;


echo "Distance To Convert: $miles miles\n";
echo "That's: $miles_to_km km ";



echo "\n";

// echo "Distance: ";
// echo $km;
// echo " km = ";
// echo $km_to_miles;
// echo " miles ";
//
// echo "\n";

?>
