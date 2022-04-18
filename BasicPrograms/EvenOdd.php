<?php

/**
 * Program to check given number is even or odd
 */
$number = (int)readline('Enter Number : ');
/**
 * if number divide by 2 , if reminder is 0 then number is even else number is odd 
 */
if ($number % 2 == 0) {
    echo "$number is Even Number";
} else {
    echo "$number is Odd Number";
}
?>
