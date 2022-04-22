<?php
/**
 * Multi-dimensional Array
 */
//2DArray Example
$cars = array(
    array("Volvo", 22, 18),
    array("BMW", 10, 18),
    array("Audi", 15, 10)
);

for ($row = 0; $row < 3; $row++) {
    echo "Row Number $row \n";
    echo "<ul>";
    for ($col = 0; $col < 3; $col++) {
        echo "<li>".$cars[$row][$col]."</li>";
    }
    echo "<ul>";
}
?>