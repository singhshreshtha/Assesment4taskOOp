<?php
/* ques-4: What are traits and namespaces? Give Example.
ans- Traits are used to achive multiple inheritance in php. Since, in php multiple inheritance is not allowed using multiple classes.

Namespaces are qualifiers that solve two different problems:
They allow for better organization by grouping classes that work together to perform a task
They allow the same name to be used for more than one class
*/

include "vehicle.php";
use Vehicle as V;

$compass = new V\Jeep();
$compass->name = "Compass";
$compass->startDriving($compass->name);
echo "<br>";
$city = new V\Honda();
$city->name = "City";
$city->startDriving($city->name);
echo "<br>";
$city->startAC($city->name);
?>