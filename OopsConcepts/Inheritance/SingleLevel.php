<?php  
    class Car  
    {  
        public function brand()  
        {  
            echo "This is BMW car, ";  
        }     
    }  
    class Drive extends Car  
    {  
        public function run()  
        {  
            echo "I'm Driving at 150kmph";  
        }     
    }  
    $obj= new Drive();  
    $obj->brand();  
    $obj->run();  
?>  