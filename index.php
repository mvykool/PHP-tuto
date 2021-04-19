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

echo "<p>Variable x outside function iss: $x</p>";

$x = 5;
$y = 10;

function myTest2() {
	global $x, $y;
	$y = $x + $y;
}

myTest();
echo $y; // outputs 15


$x = 5;
$y = 10;

function myTest3() {
    $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
}

myTest();
echo $y; // outputs 15

echo "<h2>PHP is Fun!</h2>";
echo "Hello world!<br>";
echo "I'm about to learn PHP!<br>";
echo "This ", "string ", "was ", "made ", "with multiple parameters. and more";
?>

</body>
</html>