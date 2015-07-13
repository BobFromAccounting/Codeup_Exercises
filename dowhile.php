<?php
	$test = 2;

	do {
		echo "{$test}" . PHP_EOL;
		$test *= $test;
	} while ($test < 1000000);




?>