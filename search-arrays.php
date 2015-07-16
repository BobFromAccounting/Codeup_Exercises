<?php

$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];

function isSearching ($needle, $names) {

	$results = array_search($needle, $names);

	if ($results !== false) {
		return true;
	} else {
		echo "The following name does not exist: $needle";
		return false;
	}
}

echo isSearching('Tina', $names) . PHP_EOL;
echo isSearching('Bob', $names) . PHP_EOL;