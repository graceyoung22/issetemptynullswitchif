<?php

//4 ifs
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

// Switch-cases
switch ($weather1) {
	case "rain":
		echo "bring an umbrella";
		break;
	case "sun":
		echo "enjoy your day";
		break;
	case "cloudy":
		echo "eh it's 50/50";
		break;
}		

switch (isset($var4)) {
	case "":
		echo "True";
		break;
	case " ":
		echo "True";
		break;
	case NULL:
		echo "False";
		break;
}		

switch (empty($var5)) {
	case "":
		echo "True";
		break;
	case " ":
		echo "False";
		break;
	case NULL:
		echo "True";
		break;
}

switch (is_null($var6)) {
	case "":
		echo "False";
		break;
	case " ":
		echo "False";
		break;
	case NULL:
		echo "True";
		break;
}

?>
