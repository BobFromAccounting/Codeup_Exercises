<?php

$test = 5;
$firstCondition = 3;
$secondCondition = 2;

while ($test <= 15) {
	if ($test % $firstCondition == 0 && $test % $secondCondition == 0) {
		echo "{$test} is divisible by both {$firstCondition} and {$secondCondition}." . PHP_EOL;
	} else if ($test % $firstCondition == 0) {
		echo "{$test} is divisible by {$firstCondition}." . PHP_EOL;
	} else if ($test % $secondCondition == 0) {
		echo "{$test} is divisible by {$secondCondition}." . PHP_EOL;
	} else {
		echo "{$test}" . PHP_EOL;
	}
	$test += 1;
}

?>
