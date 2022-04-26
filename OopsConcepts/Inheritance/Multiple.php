<?php

/**
 * Multiple Inheritance
 */
class MyName
{
    /**
     * Function to print name
     * passing name as parameter
     */
    public function myName($name)
    {
        echo "\nName : " . $name;
    }
}
trait MyAge
{
    /**
     * Function to print age
     * passing age as parameter
     */
    public function myAge($age)
    {
        echo "\nAge : " . $age;
    }
}
class MyAddress extends MyName
{
    use MyAge;
    /**
     * Function to print address
     * passing address as parameter
     */
    public function myAddress($address)
    {
        echo "\nAddress is : " . $address;
    }
}
$myAddressObj = new MyAddress();

$name = readline('Enter Your Name : ');
$age = readline('Enter Your Age : ');
$address = readline('Enter Your Address : ');
$myAddressObj->myName($name);
$myAddressObj->myAge($age);
$myAddressObj->myAddress($address);