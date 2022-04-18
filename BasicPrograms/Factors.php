<?php

/**
 * PHP program to find factors of a number 
 * */

$x = (int)readline('Enter Number : ');
$i = 1;

echo "The factors of the " . $x . " are: ";

while ($i <= $x) {
    if ($x % $i == 0) {
        echo $i . " ";
    }
    ++$i;
}
?>