<?php

class A
{
    function showA()
    {
        echo "I am show method in A Class";
    }
}

class B extends A
{
    function showB()
    {
        echo "I am show method in B Class";
    }
}

class C extends B
{
    function showC()
    {
        echo "I am show method in C Class";
    }
}


$obj = new C;
$obj->showA();
$obj->showB();
$obj->showC();
?>