<?php

/**
 * Program to check Entered Number is Palindrome number or not
 */

/**
 * @param $num getting number input to check palindrom
 * @param $reverse to reverse the number
 * @param $n store initial given value by user to compare with revsere
 */
$num = (int)readline('Enter number : ');
$reverse = 0;
$n = $num;
/**
 * while loop
 */
while (floor($num)) {
    $mod = $num % 10;
    $reverse = $reverse * 10 + $mod;
    $num = $num / 10;
}

/**
 * checking if initial value and revsere values are same then number is palindrom else not palindrom
 */
if ($n == $reverse) {
    echo "$n is a Palindrome number.";
} else {
    echo "$n is not a Palindrome number.";
}
?>