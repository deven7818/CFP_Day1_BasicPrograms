<?php

include("Util.php");

//creating object of Util class
$utility = new Util();

$celsius = readline('Enter temperature in Celsius: ');
$farenheit = readline('Enter temperature in Farenheit: ');
$utility::fahrenheit($celsius);
$utility::celsius($farenheit);
?>