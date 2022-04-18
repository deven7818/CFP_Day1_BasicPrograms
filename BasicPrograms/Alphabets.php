<?php

/**
 * Program to check given alphabate is vovel or consonant
 */
$x = readline('Enter alphabate : ');
if (
    $x == 'a' || $x == 'e' ||
    $x == 'i' || $x == 'o' ||
    $x == 'u'
)
    echo "Vowel" . "\n";
else
    echo "Consonant" . "\n";
?>