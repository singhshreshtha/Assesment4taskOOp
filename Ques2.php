<?php
// Ques-2 Create an interface A that has 2 methods,abstract class B implements the method and gives definition for 1 method.Create a concrete class and create its object .

interface A {
	public function someMethod();
	public function someMethod2($val);
}

abstract class B implements A {
	public function someMethod() {
		echo "Some method called";
	}
}

class C extends B {
	public function someMethod2($val) {
		echo "Some method 2 is called with ". $val;
	}

}

$obj = new C();
$obj->someMethod();
echo "<br>";
$obj->someMethod2("Value");
?>