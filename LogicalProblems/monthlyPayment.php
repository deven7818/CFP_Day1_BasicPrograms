<?php

/**
 * Program to calculate monthlyPayment that reads in three 
 * command-line arguments P, Y, and R.
 * calculates the monthly payments you would have to make over 
 * Y years to pay off a P principal loan amount at R per cent 
 * interest compounded monthly.
 */

class MonthlyPayment
{
    /**
     * Function to calculate monthly payment using given formula
     * Passing the parameters $principal , $rate and $years
     * returns the monthly payment
     */
    public static function monthlyPayment($principal, $rate, $years)
    {
        $p = $principal;
        $n = 12 * $years;
        $r = $rate / (12 * 100);
        $payment  = ($p * $r) / (1 - pow(1 + $r, $n));
        echo "Your monthly payment is : " . round($payment, 2);
    }
}

//taking command-line aurguments
$payment = $argv[1];
$rate = $argv[2];
$years = $argv[3];
MonthlyPayment::monthlyPayment($principal, $rate, $years);
?>