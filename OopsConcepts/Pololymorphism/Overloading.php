<?php
// Program to explain function overloading in PHP

// Creating a class of type shape
class shape {
	
	// __call is magic function which accepts function name and arguments
	function __call($name_of_function, $arguments) {
			
		// It will match the function name
		if($name_of_function == 'area') {
			
			switch (count($arguments)) {
					
				// If there is only one argument area of circle
				case 1:
					return 3.14 * $arguments[0];
						
				// IF two arguments then area is rectangle
				case 2:
					return $arguments[0]*$arguments[1];
			}
		}
	}
}
	
// Creating a shape type object
$shape = new Shape;
	
// Function call for single aurgument
echo " Area of circle : ".($shape->area(2));
echo "\n";
	
// calling area method for rectangle
echo " Area of rectangle : ". ($shape->area(4, 2));
?>
