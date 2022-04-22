<?php
/**
 * Assosiative Array key and value pair
 */
   function createArray(){
       $array = array();
       $size = readline("Enter Size of an array : ");
       for($i=0;$i<$size;$i++){
           $key = readline("Enter key for $i \n");
           $value = readline("Enter value for $i \n");
           $array[$key] = $value;
       }
       return $array;
   }

   function displayArray($array){
       echo "Elements of array are : \n";
       foreach($array as $key => $value){
           echo $key . " => " .$value ."\n";
       }
   }

   $arrayResult = createArray();
   displayArray($arrayResult);
?>