<?php 

/* 3. How multiple inheritance is handled in PHP? Give example.
ans-PHP can only support single inheritance i.e a child class can inherit only from one single parent. So to deal with multiple inheritance php use traits, Traits are used to declare methods that can be used in multiple classes. Traits can have methods and abstract methods that can be used in multiple classes, and the methods can have any access modifier (public, private, or protected). */

trait Drive{

	function startDriving($name){
		echo "The ".$name." is driving";
	}
}

trait AirCondition{

	function startAC($name){
		echo "The ".$name." AC has started";
	}
}

class Vehicle{
	public $name;
}

class Jeep extends Vehicle{
	use Drive;
}

class Honda extends Vehicle{
	use Drive, AirCondition;
}

$compass = new Jeep();
$compass->name = "Compass";
$compass->startDriving($compass->name);
echo "<br>";
$city = new Honda();
$city->name = "City";
$city->startDriving($city->name);
echo "<br>";
$city->startAC($city->name);
?>