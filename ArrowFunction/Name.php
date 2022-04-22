<?php

//For loop
// echo "for loop\n";
// $name = "Deven";
// for ($i = 0; $i < 10; $i++) {
//     echo "$name \n";
// }

//foreach Loop
$colors = array("red", "green", "blue", "yellow");
//For every loop iteration -the value of the current array element is assigned to $value
//and the array pointer is moved by one until last element
foreach ($colors as $value) {
  echo "$value <br>";
}



//while loop
//echo "while loop \n";
// $n = 1;
// while ($n <= 10) {
//     echo "$n $name\n";

//     $n++;
// }


//do while loop

// echo "Do while loop \n";
// $x = 1;
// do {
//     echo "$x $name\n";
//     $x++;
// } while ($x >= 10);


//Switch case


$favCar = "BMW";

switch ($favCar) {
    case "BMW":
        echo "Your favorite car is BMW!";
        break;
    case "Audi":
        echo "Your favorite car is Audi!";
        break;
    case "Volvo":
        echo "Your favorite car is Volvo!";
        break;
    default:
        echo "Your favorite car is not exist!";
}
?>