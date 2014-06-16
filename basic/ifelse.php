<?php
echo "Hello World!<br>";

$d = date("D");
if ($d == "Fri")
	echo "Today is Friday.";
elseif ($d == "Sun")
	echo "Have a nice Sunday";
else
	echo "Have a nice day.";
?>