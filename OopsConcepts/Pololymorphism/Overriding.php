<?php
// PHP program to implement function overriding

// This is parent class
class ParentClass
{

    // Function bike of parent class
    function bike()
    {
        echo "Shine";
    }
}

// This is child class
class ChildClass extends ParentClass
{

    // Overriding bike method
    function bike()
    {
        echo "\nUnicorn";
    }
}

// Reference type of parent
$parent = new ParentClass;

// Reference type of child
$child = new ChildClass;

// print Parent
$parent->bike();

// Print child
$child->bike();
?>