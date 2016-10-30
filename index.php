<?php

if ($weather == rain) {
	echo "bring an umbrella";
} elseif ($weather == sun) {
	echo "enjoy your day";
} elseif ($weather == cloudy) {
	echo "eh it's 50/50";
}	

$var = " ";
if (isset($var)) {
	echo "True";
} else {
	echo "False";
}	

$var1 = "";
if (empty($var1)) {
	echo "True";
} else {
	echo "False";
}

$var2 = NULL;
if (is_null($var2)) {
	echo "True";
} else {
	echo "False";
}	

$var3 = "0";
if (isset($var3)) {
	echo "True";
} else {
	echo "False";
}	

?>
