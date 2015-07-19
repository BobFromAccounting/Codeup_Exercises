<?php

	function list_cars ($cars) {
		foreach ($cars as $car => $details) {
			echo "I own a {$details['year']} {$car}. Details Below:" . PHP_EOL;
			echo "----------------------------------------------" . PHP_EOL;
			echo "{$details['doors']} Door {$details['year']} {$car}" . PHP_EOL;
			echo "Colors: {$details['color']}" . PHP_EOL;
			echo "Mileage: {$details['mileage']} miles" . PHP_EOL;
			if ($details['sunroof'] == false) {
				echo "Sunroof: N/A" . PHP_EOL;				
			} else {
				echo "Sunroof: {$details['sunroof']}" . PHP_EOL;
			}
			if ($details['convertable'] == false) {
				echo "Convertable: N/A" . PHP_EOL;
			} else {
				echo "Convertable: {$details['convertable']}" . PHP_EOL;
			}
			echo "License NO: {$details['license']}" . PHP_EOL;

			echo PHP_EOL;
		}
	}

	$cars = array(
		'Toyota Solara' => array(
	    	'year' => 2001,
	    	'doors' => 2,
	    	'color' => 'gray',
	    	'mileage' => 100000,
	    	'sunroof' => true,
	    	'convertable' => false,
	    	'license' => 'JSRULZ',
		),

		'Honda Odyssey' => array(
	    	'year' => 2004, 
	    	'doors' => 4,
	    	'color' => 'maroon',
	    	'mileage' => 60000,
	    	'sunroof' => false,
	    	'convertable' => false,
	    	'license' => 'ILUVPHP',
		),

		'Cadillac Escalade' => array(
	    	'year' => 2014,
	    	'doors' => 4,
	    	'color' => 'white',
	    	'mileage' => 5000,
	    	'sunroof' => false,
	    	'convertable' => false,
	    	'license' => 'HTML5',
		),

	);


	list_cars($cars);



?>