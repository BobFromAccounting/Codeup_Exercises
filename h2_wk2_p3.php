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
				echo "Sunroof: Yes" . PHP_EOL;
			}
			if ($details['convertable'] == false) {
				echo "Convertable: N/A" . PHP_EOL;
			} else {
				echo "Convertable: Yes" . PHP_EOL;
			}
			echo "License NO: {$details['license']}" . PHP_EOL;

			echo PHP_EOL;
		}
	}

	function add_car ($cars) {
		$newCar = array(
			'Telsa Model S' => array(
				'year' => 2015,
				'doors' => 4,
				'color' => 'black',
				'mileage' => 1000,
				'sunroof' => true,
				'convertable' => false,
				'license' => 'LISPFTW',
				)
			);
		return $cars + $newCar;
	}

	$cars = array(
		'Toyota Solara' => array(
	    	'year' => 2001,
	    	'doors' => 2,
	    	'color' => 'gray',
	    	'mileage' => 100000,
	    	'sunroof' => true,
	    	'convertable' => true,
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
	
	add_car($cars);

	list_cars(add_car($cars));
?>