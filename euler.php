<?php

	// project euler 1
	function problemOne () {
		$sum = 0;

		for ($i = 0; $i < 1000; $i += 1) {
			if ($i % 3 == 0 || $i % 5 == 0) {
				$sum += $i;
			}
		}

		echo("$sum" . PHP_EOL);
	}

	problemOne();

?>