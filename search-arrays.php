<?php

$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];

function isSearching ($needle, $names) {
	$results = array_search($needle, $names);

	if ($results !== false) {
		return "$needle is in the array at index: $results";
	} else {
		return "The following name does not exist: $needle";
	}
}

function compareArrays ($needle, $names, $compare) {
	$resultsNames = array_search($needle, $names);
	$resultsCompare = array_search($needle, $compare);

	if ($resultsNames !== false && $resultsCompare !== false) {
		if ($resultsNames === $resultsCompare) {
			return "$needle appears in both arrays at index: $resultsNames";
		} else {
			return "$needle does not appear in both arrays.";
		}
	} else {
		return "The following name does not match in both arrays: $needle";
	}
}



echo isSearching('Tina', $names) . PHP_EOL;
echo isSearching('Bob', $names) . PHP_EOL;

echo PHP_EOL;
echo PHP_EOL;

echo compareArrays("Tina", $names, $compare) . PHP_EOL;
echo compareArrays("Amy", $names, $compare) . PHP_EOL;
echo compareArrays("Dana", $names, $compare) . PHP_EOL;
echo compareArrays("Dean", $names, $compare) . PHP_EOL;
echo compareArrays("Mike", $names, $compare) . PHP_EOL;
echo compareArrays("Mel", $names, $compare) . PHP_EOL;
echo compareArrays("Michael", $names, $compare) . PHP_EOL;
echo compareArrays("Adam", $names, $compare) . PHP_EOL;
