<?php

/**
 * Program for quadratic equiations to find roots of equiations
 */
function quadratic()
{ //function for quadratic equiation
    // taking input value from user for equiation
    $a = readline("enter value for a : ");
    $b = readline("enter value for b : ");
    $c = readline("enter value for c : ");
    
    //formula
    $delta = $b * $b - 4 * $a * $c;

    $delta = abs($delta);
    //finding roots 
    $root1 = (-$b + sqrt($delta)) / (2 * $a);
    $root2 = (-$b - sqrt($delta)) / (2 * $a);

    echo "roots are $root1 and $root2";
}

//calling function
quadratic();
?>