<?php

/**
 * Program to check wheather given number is perfect number or not
 */
class PerfectNumber
{
    //function to check perfect number
    function perfectNum($num)
    {
        $sum = 0;
        for ($i = 1; $i < $num; $i++) {
            if (($num % $i) == 0) {
                $sum = $sum + $i;
            }
        }
        if ($sum == $num) {
            echo "The Number $num is perfect Number.";
        } else {
            echo "The number $num is not perfect Number";
        }
    }
}
//creating object of class
$perfectNum = new PerfectNumber();
$num = readline("Enter a number : ");
$perfectNum->perfectNum($num);
?>