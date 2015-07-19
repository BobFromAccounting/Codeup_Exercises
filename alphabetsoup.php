<?php
	
	$string = "hello, codeup";

	function alphabetSoup ($string) {
		$stringArray = explode(',', $string);

		foreach ($stringArray as $word) {
			$stringParts = str_split($word);
			sort($stringParts);
			$stringReturn = implode('', $stringParts);
			print_r($stringReturn);
		}
		echo PHP_EOL;
	}

	alphabetSoup($string);
?>