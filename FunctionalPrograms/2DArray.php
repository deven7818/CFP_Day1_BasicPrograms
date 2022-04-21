<?php
/**
 * Program for 2 dimentional Array
 */

 //Taking input for array from user
$row = readline("Enter No of rows ");
$col = readline("Enter No of column ");

//Created array and store the values
function create2DArrayInteger($row, $col)
{
    $array = array();
    for ($i = 0; $i < $row; $i++) {
        for ($j = 0; $j < $col; $j++) {
            $array[$i][$j] = readline("Enter $i$j elements \n");
        }
    }
    return $array;
}

//function for array of double 
function createArrayDouble($row, $col){
    $arrayDouble = array();
    for ($i = 0; $i < $row; $i++) {
        for ($j = 0; $j < $col; $j++) {
            $arrayDouble[$i][$j] = readline("Enter Double value for $i$j elements \n");
        }
    }
    return $arrayDouble;
}

//Function to diaplay array
function displayArray($array, $row, $col)
{

    for ($i = 0; $i < $row; $i++) {
        for ($j = 0; $j < $col; $j++) {
            echo $array[$i][$j] . " ";
        }
        echo "\n";
    }
}

//Calling function
$TwoDArray =  create2DArrayInteger($row, $col);
echo "\n";
$doubleArray= createArrayDouble($row, $col);
displayArray($TwoDArray, $row, $col);
echo "\n";
displayArray($doubleArray,$row,$col);
?>