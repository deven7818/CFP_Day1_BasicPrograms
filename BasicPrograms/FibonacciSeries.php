<?php

/**
 * Program to generate Fibonacci Series
 */

/**
 * @param $f1 contains first number = 0
 * @param $f2 contains second number = 1 
 * @param $n contains total Fibonacci series number count.
 */
$f1 = 0;
$f2 = 1;
$n = 10;
echo $f1;
echo ' , ';
echo $f2;
echo ' , ';
for ($i = 1; $i <= $n; $i++) {
    $f3 = $f1 + $f2;
    $f1 = $f2;
    $f2 = $f3;
    echo $f3 . " , ";
}
?>
