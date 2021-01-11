<?php
/*ques-5 What do you understand by dependency injection.
ans-Dependency injection is a procedure where one object supplies the dependencies of another object. Dependency Injection is a software design approach that allows avoiding hard-coding dependencies and makes it possible to change the dependencies both at runtime and compile time.*/

   class Vehicle {
      private $cars;
      public function __construct($cars){
         $this->cars = $cars;
      }
      public function totalCars(){
         return count($this->cars);
      }
   }
   $carsArray = array("Jeep", "City", "Thar");
   $obj = new Vehicle($carsArray);
   echo "Total Cars are: ".$obj->totalCars();
?>
