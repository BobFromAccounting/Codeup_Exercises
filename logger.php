<?php

function logMessage ($logLevel, $message)
{
	$today = date("Y-m-d");
	$logSpecificTime =  date("Y-m-d H:i:s");
	$filename = "log/log-{$today}.log";
	$stringToWrite =  "{$logSpecificTime} [{$logLevel}] {$message}";
	$handle = fopen($filename, 'a');
	fwrite($handle, PHP_EOL . $stringToWrite);
	fclose($handle);
}


function logInfo ($message)
{
	$logLevel = "INFO";

	logMessage($logLevel, $message);
}

function logError ($message)
{
	$logLevel = "Error";

	logMessage($logLevel, $message);
}

$messageExample = "WARNING! It's a TRAaaP!";
$messageExampleTwo = "Red squadron, Luke didn't make it past the trenches...Probably Should have used the targetter.";

logInfo($messageExample);
logError($messageExampleTwo);

?>