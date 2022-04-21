<?php

/**
 * Program for WindChill takes two double command-line arguments temp and speed and prints the wind chill.
 */

//function for caluculting windChill
function windChill()
{
    $temp = readline("Enter Temperature : ");
    $speed = readline("Enter wnd Speed : ");
    if ($temp < 50 && $speed > 3 && $speed < 120) {
        $w = 35.74 + (0.62158 * $temp) + (((0.4275 * $temp) - 35.75) * (pow($speed, 0.16)));
        echo "Wind Chill is : $w \n";
    } else {
        echo "Invalid Input !! Please enter valid input";
    }
}
windChill();
?>