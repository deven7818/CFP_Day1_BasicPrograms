<?php

/**
 * Program to find three elements whose sum is equals to zero
 */

function findSumToZero($arr, $n)
{
    $found = false;
    for ($i = 0; $i < $n - 2; $i++) {
        for ($j = $i + 1; $j < $n - 1; $j++) {
            for ($k = $j + 1; $k < $n; $k++) {
                if ($arr[$i] + $arr[$j] + $arr[$k] == 0) {
                    echo $arr[$i], " ",
                    $arr[$j], " ",
                    $arr[$k], "\n";
                    $found = true;
                }
            }
        }
    }
    if ($found == false)
        echo "Not exist \n";
}
$arr = array(0, -1, 2, -3, 1);
$n = sizeof($arr);
findSumToZero($arr, $n);
?>