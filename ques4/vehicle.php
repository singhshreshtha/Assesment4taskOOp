<?php
namespace Vehicle;

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

class Car{
	public $name;
}

class Jeep extends Car{
	use Drive;
}

class Honda extends Car{
	use Drive, AirCondition;
}


?>
