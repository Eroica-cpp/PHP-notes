<?php

echo "demo 1: <br>";
function do_sth(){
	echo "Hey! I'm writing functions by PHP. <br>";
}

do_sth();
echo "<br>";

echo "demo 2: <br>";
function add($x, $y){
	return $x + $y;
}

echo "1 + 2 = " . add(1, 2) . "<br>";
echo "<br>";

?>