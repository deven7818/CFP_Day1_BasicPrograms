<?php

/**
 * Program to find largest number among three numbers
 */
$num1 = (int)readline('Enter first Number : ');
$num2 = (int)readline('Enter second Number : ');
$num3 = (int)readline('Enter third Number : ');

//if num1 is greater than num2 and num3 then num1 is largest
if ($num1 > $num2 && $num1 > $num3) {
    echo $num1;
}
//else if num2 is greater than num1 and num3 then num2 is largest
else {
    if ($num2 > $num1 && $num2 > $num3) {
        echo $num2;
    }
    // else num3 is largest
    else
        echo $num3;
}
?>