<?php

//Normal function
$count  = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
// $result = array_map(function($n){
//     return $n * 10;
// },$count);

//Arrow function
$result = array_map(fn ($n) => $n * 15, $count);
print_r($result);
?>