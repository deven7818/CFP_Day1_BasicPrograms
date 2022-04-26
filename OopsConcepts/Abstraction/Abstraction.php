<?php

abstract class Animal {
    public $name;
    public $age;
    public function Describe(){
        return $this->name . "," . $this->age . "years old";
    }
    //abstract function
    abstract public function Greet();
}

class Cat extends Animal {
    //Implimented abstract function here
    public function Greet() {
        return "Lion";
    }
    
    public function Describe() {
        return parent::Describe() . ", and i'm a cat ";
    }
}
//Creating object of cat class
$animal = new Cat();
$animal->name = "Tommy";
$animal->age = 5;

//calling functions
echo $animal->Describe();
echo $animal->Greet();
?>