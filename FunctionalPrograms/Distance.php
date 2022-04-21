<?php

/**
 * Program to calculate distance between two points
 */

//function to calculate distance
function distance()
{
    //taking input from user for x and y
    $x = readline("Enter the value for x : ");
    $y = readline("Enter the value for y :");
    $sqrt = sqrt(($x * $x) + ($y * $y)); // calling sqrt function to calculate square root 
    echo "Distance is $sqrt \n";
}

//calling distance function
distance();
?>