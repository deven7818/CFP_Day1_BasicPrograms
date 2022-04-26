<?php
/*
 * Program for Heirarchical inheritance
 */
class MyName {
    /**
     * Function to print name
     * passing name as parameter
     */
    public function myName($name){
        echo "\nName : " . $name;
    }
}
class MyAge extends MyName {
    /**
     * Function to print age
     * passing age as parameter
     */
    public function myAge($age){
        echo "\nAge is : " . $age;
    }
}
class MyAddress extends MyName {
    /**
     * Function to print number
     * passing address as parameter
     */
    public function myAddress($address){
        echo "\nAddress is : " . $address;
    }
}
$myAgeObj = new MyAge();
$myAddressObj = new MyAddress();
$name = readline('Enter Your Name : ');
$age = readline('Enter Your Age : ');
$address = readline('Enter Your Address : ');

$myAgeObj->myName($name);
$myAgeObj->myAge($age);

$myAddressObj->myName($name);
$myAddressObj->myAddress($address);
?>