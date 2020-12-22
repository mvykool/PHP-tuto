<?php
echo "Today is " . date("Y/m/d") . "<br>";
echo "Today is " . date("Y.m.d") . "<br>";
echo "Today is " . date("Y-m-d") . "<br>";
echo "Today is " . date("l");
echo date("Y");

echo "The time is " . date("h:i:sa");

date_default_timezone_set("America/New_York");
echo "The time is " . date("h:i:sa");

//OOP 

class Fruit {
	public $name;
	public $color;

	function __construct($name) {
	$this->name = $name;
	}
	function __destruct() {
	echo "The fruit is {$this->name}.";
	}
}

$apple = new Fruit("Apple");

class Fruit {
	public $name;
	public $color;
  
	function __construct($name, $color) {
	  $this->name = $name;
	  $this->color = $color;
	}
	function __destruct() {
	  echo "The fruit is {$this->name} and the color is {$this->color}.";
	}
  }
  
  $apple = new Fruit("Apple", "red");

?>