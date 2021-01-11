<?php
// Ques-1 Demonstrate the concept of method chaining in PHP.
// Answer- When we call multiple methods of the same class by chaining them together on same or other object of class. Each function should return an object of the class in order to chain method calling.

class Vehicle
{
    private $carName;
    function __construct($carName)
    {
        $this->carName = $carName;
    }
    
    function insertKeys()
    {
    	echo "Keys inserted -> ";
        return $this;
    }
    
    function startIgnition()
    {
        echo "Engine started -> ";
        return $this;
    }
    
    function startDriving()
    {
        echo $this->carName . " is driving";
    }
}


$city = new Vehicle("City");


echo $city->insertKeys()->startIgnition()->startDriving();
?>