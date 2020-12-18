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


?>