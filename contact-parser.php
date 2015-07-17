<?php

$filename = 'contacts.txt';

function parseContacts($filename) {
	$contacts = array();

	$handle = fopen($filename, 'r');
	$contents = trim(fread($handle, filesize($filename)));
	$entries = explode(PHP_EOL, $contents);
	
	foreach ($entries as $key => $entry) {

		$innerArray = explode('|', $entry);

		$contacts[$key]['name'] = $innerArray[0];
		$contacts[$key]['number'] = formatNumbers($innerArray[1]);

		// option 2
		// $contacts[] = array(
		// 	'name' => $innerArray[0],
		// 	'number' => formatNumbers($innerArray[1])
		// );
		
		// option 3
		// $innerArray['name'] = explode('|', $entry)[0];
		// $innerArray['number'] = explode('|', $entry)[1];
		// $innerArray['number'] = formatNumbers($innerArray['number']);
		// array_push($contacts, $innerArray);
	}
	
	fclose($handle);
    return $contacts;
}

function formatNumbers ($number) {
	$number = '(' . substr($number, 0, 3) . ') ' . substr($number, 3, 3) . '-' . substr($number, 6, 4);
	return $number;
}

var_dump(parseContacts($filename));
