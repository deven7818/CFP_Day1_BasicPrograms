<?php

/**
 * Program to check Entered Year is leap year or not
 */

//Taking year as input from user
$year = (int)readline('Enter Year : ');
//if (preg_match("/^[0-9]{4}$/", $year)); {
//Checking condition for leap year
if (($year % 4 == 0) & ($year % 100 != 0) | ($year % 400 == 0)) {
    echo "$year is leap year";
} else {
    echo "$year is not leap year";
}
?>