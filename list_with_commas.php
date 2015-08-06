<?php

	function humanizedList($array, $sort = false)
	{
		if ($sort) {
			sort($array);
		}
		$lastInArray = array_pop($array);
		array_push($array, "and {$lastInArray}");
		return implode(", ", $array);
	}

	$physicistsString = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';

	$stringToArray = explode(', ', $physicistsString);

	$famousFakePhysicists = humanizedList($stringToArray, true);

	echo "Some of the most famous fictional theoretical physicists are {$famousFakePhysicists}." . PHP_EOL;

?>