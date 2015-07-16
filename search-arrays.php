<?php

function isInArray ($name, $names) {
	$results = array_search($name, $names);

	if ($results !== false) {
		return true;
	} else {
		return false;
	}
}

function compareArrays ($names, $compare) {
	$commonNames = 0;
	foreach ($names as $name) {
		$results = array_search($name, $compare);
		if ($results !== false) {
			$commonNames += 1;
		}
	}
	return $commonNames . PHP_EOL;
}

$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];


echo isInArray('Tina', $names) . PHP_EOL;
echo isInArray('Bob', $names) . PHP_EOL;

echo compareArrays($names, $compare);

?>