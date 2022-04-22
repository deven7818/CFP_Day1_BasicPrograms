<?php
class Fruit
{

    //Variables
    public $name;
    public $color;

    //constructor function
    function __construct($name)
    {
        $this->name = $name;
    }
    //get_name function
    function get_name()
    {
        return $this->name;
    }
}

//creating object of fruit class
$apple = new Fruit("Apple");
echo $apple->get_name();
?> 