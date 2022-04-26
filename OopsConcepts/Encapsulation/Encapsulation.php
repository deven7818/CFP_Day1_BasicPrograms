<?php

// Program to implements encapsulation
class Person{
    public $name;
    public $age;
    
    //creating constructor passing parameter $n - name, $a - age
    function __construct($n, $a){
        $this->name = $n;
        $this->age = $a;
    }
    //function to set age
    public function setAge($ag){
        $this->ag = $ag;
    }

    //function to display name and age
    public function display(){
        echo "Welcome " .$this->name;
        return $this->age-$this->ag;
    }
}

//Creating object and passing parameters
$person = new Person("Deven",27);
$person ->setAge(1);
echo " You are ".$person->display()."years old";
?>