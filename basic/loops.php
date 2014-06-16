<?php

echo "In while loop: <br>";
$i = 1;
while($i <= 5){
	echo "The number is: " . $i . "<br>";
	$i ++;
}
echo "<br>";

echo "There are also do ... while() loop, for loop, etc ..., which are similar.<br>";
echo "<br>";

echo "foreach loop: <br>";
$tmp_array = array("An ", "array ", "to ", "demo ", "foreach ", "loop");
foreach ($tmp_array as $i){
	echo $i . "<br>";
}
echo "<br>";

?>