<?php

// TODO: Create your inspect() function here
function inspect ($var) {
	$type = gettype ($var);
	switch ($type) {
		case ("NULL"):
			return 'The value is Null.' . PHP_EOL;
		case ("array"):
			if (empty($var)) {
				return 'This is an empty array.' . PHP_EOL;
			} else {
				return 'This is an array.' . PHP_EOL;
			}
		case ("boolean"):
			if ($var) {
				return "This $type is true." . PHP_EOL;
			} else {
				return "This $type is false." . PHP_EOL;
			}
		case ("string"):
			if (empty($var)) {
				return "The string is empty" . PHP_EOL;	
			} else {
				return "The $type is $var" . PHP_EOL;
			}
		default:
			return "The $type is $var" . PHP_EOL;
	}
}


// Do not mofify these variables!
$string1 = "I'm a little teapot";
$string2 = '';
$array1 = [];
$array2 = [1, 2, 3];
$bool1 = true;
$bool2 = false;
$num1 = 0;
$num2 = 0.0;
$num3 = 12;
$num4 = 14.4;
$null = NULL;

// TODO: After each echo statement, use inspect() to output the variable's type and its value

echo 'Inspecting $num1:' . PHP_EOL;
echo inspect ($num1);
echo 'Inspecting $num2:' . PHP_EOL;
echo inspect ($num2);
echo 'Inspecting $num3:' . PHP_EOL;
echo inspect ($num3);
echo 'Inspecting $num4:' . PHP_EOL;
echo inspect ($num4);
echo 'Inspecting $null:' . PHP_EOL;
echo inspect ($null);
echo 'Inspecting $bool1' . PHP_EOL;
echo inspect ($bool1);
echo 'Inspecting $bool2' . PHP_EOL;
echo inspect ($bool2);
echo 'Inspecting $string1' . PHP_EOL;
echo inspect ($string1);
echo 'Inspecting $string2' . PHP_EOL;
echo inspect ($string2);
echo 'Inspecting $array1' . PHP_EOL;
echo inspect ($array1);
echo 'Inspecting $array2' . PHP_EOL;
echo inspect ($array2);