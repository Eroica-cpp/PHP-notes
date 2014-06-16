<?php

// define array
// method 1:
$tmp1 = array("This ", "is ", "an ", "array");
echo "method 1: " . $tmp1[0] . $tmp1[1] . $tmp1[2] . $tmp1[3];
echo "<br>";

// method 2:
$tmp2[0] = "This";
$tmp2[1] = "is";
$tmp2[2] = "an";
$tmp2[3] = "array";
echo "method 2: " . $tmp1[0] . $tmp1[1] . $tmp1[2] . $tmp1[3];
echo "<br>";

// corelated array
$ages = array("Peter"=>32, "Quagmire"=>30, "Joe"=>34);
echo "Peter is " . $ages['Peter'] . " years old.";

?>