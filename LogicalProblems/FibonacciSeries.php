<?php
// Program to get the Fibonacci series
class FibonacciSeries
{
    function fibonacciSeries($n)
    {
        //initializing $num1 = 0 & $num2 = 1
        $num1 = 0;
        $num2 = 1;
        $counter = 0;
        echo ' ' . $num1 . ' ' . $num2;
        while ($counter < $n) {
            $num3 = $num2 + $num1;
            $num1 = $num2;
            $num2 = $num3;
            ++$counter;
            echo " $num3 ";
        }
    }
}
//creating object of class
$fibonacci = new FibonacciSeries();
//Taking input from user
$n = readline("Enter nuber :");
$fibonacci->fibonacciSeries($n); //object operator used in object scope to access method & prop of obj
?> 