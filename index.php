<!DOCTYPE html>
<html>
<body>

<?php
$color = "red";
echo "My car is " . $color . "<br>";
echo "My house is " . $COLOR . "<br>";
echo "My boat is " . $coLOR . "<br>";

// This is a single-line comment

# This is also a single-line commen 

$txt = "Hello world!";
$xx = 5;
$y = 10;

$x = 5; // global scope

function myTest() {
  // using x inside this function will generate an error
echo "<p>Variable x inside function is</p>";
}
myTest();

echo "<p>Variable x outside function is: $x</p>";

$x = 5;
$y = 10;

function myTest2() {
	global $x, $y;
	$y = $x + $y;
}

myTest();
echo $y; 

$x = 5;
$y = 10;

function myTest3() {
    $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
}

myTest();
echo $y; 

echo "<h2>PHP is Fun!</h2>";
echo "Hello world!<br>";
echo "I'm about to learn PHP!<br>";
echo "This ", "string ", "was ", "made ", " with multiple parameters. and more";

$txt1 = "Learn PHP";
$txt2 = "W3Schools.com";
$x = 5;
$y = 4;



for ($x = 0; $x <= 10; $x++) {
		echo "The number is: $x <br>";
	}

	$colors = array("red", "green", "blue", "yellow");

	foreach ($colors as $value) {
	echo "$value <br>";
	}

	$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

	foreach($age as $x => $val) {
	echo "$x = $val<br>";
	}

?>

</body>
</html>