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
echo "This ", "string ", "was ", "made ", " with multiple parameters. and more";

$txt1 = "Learn PHP";
$txt2 = "W3Schools.com";
$x = 5;
$y = 4;

print "<h2>" . $txt1 . "</h2>";
print "Study PHP at " . $txt2 . "<br>";
print $x + $y;


$x = "Hello world!";
$y = 'Hello worlds!';

echo $x;
echo "<br>";

echo(min(0, 150, 30, 20, -8, -200));  
echo(max(0, 150, 30, 20, -8, -200));  

?>

</body>
</html>