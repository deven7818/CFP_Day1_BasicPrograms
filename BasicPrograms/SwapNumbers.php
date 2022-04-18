<?php

/**
 * program for swapping of numbers using third variable
 */
$num1 = 10;
$num2 = 20;
echo "Before swapping numbers are ";
echo "first Number = " . $num1 . " second number = " . $num2;

/**
 * Swapping the numbers
 */
$swap = $num1;
$num1 = $num2;
$num2 = $swap;
/**
 * after swapping numbers are
 */
echo "After swapping numbers are ";
echo "first Number = " . $num1 . " second number = " . $num2;
?>