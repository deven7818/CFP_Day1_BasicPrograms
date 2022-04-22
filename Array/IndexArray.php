<?php

    //createc function for creating and initializing array
    function createAndInitializeArray(){
        $array = array();
        $size = readline("Enter size of array"); //getting size for array
        echo "enter array Elements \n";// taking elements for array
        for($i = 0; $i<$size; $i++){
            $array[$i] = readline("Enter $i elements \n");
        
        }
        return $array;
    }

    /**
     * Function to display Array
     */
    function displayArray($array){
        echo "Array elements are \n";
        for($i= 0; $i < count($array);$i++){
            echo $array[$i] . " ";
        }
    }
    //calling function to print array
    $array =  createAndInitializeArray();
    displayArray($array);
?>