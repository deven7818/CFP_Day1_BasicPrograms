<?php

/**
 * Program for Reverse the given number
 */
class ReverseNumber
{
    //function to reverse the number
    function reverse($num)
    {
        $reverse = 0;
        while ($num > 0) {
            $rem = $num % 10;
            $reverse = ($reverse * 10) + $rem;
            $num = floor($num / 10);
        }
        return $reverse;
    }
}
//creating object of class
$reverseNum = new ReverseNumber();
$num = readline("Enter the number :");
echo "The reverse of given  $num is " . $reverseNum->reverse($num);
?>