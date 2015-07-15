<?php

$a = 100;
$b = 50;

function add ($a, $b) {
	$error = errorCheck($a, $b);
	if ($error) {
	   	return $a + $b . PHP_EOL;
	}
}

function subtract ($a, $b) {
	$error = errorCheck($a, $b);
	if ($error) {
	   	return $a - $b . PHP_EOL;
	}
}

function multiply ($a, $b) {
	$error = errorCheck($a, $b);
	if ($error) {
	   	return $a * $b . PHP_EOL;
	}
}

function divide ($a, $b) {
   	$error = errorCheck($a, $b);
	if ($error) {
		if ($b == 0) {
	    	return "Impossible. Try again. This time try not to divide by 0" . PHP_EOL;
		} else {
		    return $a % $b . PHP_EOL;
		}
	}
}

function modulus ($a, $b) {
	$error = errorCheck($a, $b);
	if ($error) {
		if ($b == 0) {
	    	return "Impossible. Try again. This time try not to divide by 0" . PHP_EOL;
		} else {
		    return $a % $b . PHP_EOL;
		}
	}
}

function errorCheck ($a, $b) {
	if (!is_numeric($a) || !is_numeric($b)) {
        echo "ERROR: Both arguments must be numbers. You entered: {$a} and {$b}" . PHP_EOL;
        return false;
    } else {
    	return true;
    }
}

echo add(1, 10);
echo subtract(20, 15);
echo multiply(10, 20);
echo divide(4, 0);
echo modulus(30, 3);

echo PHP_EOL;
echo PHP_EOL;

echo add($a, $b);
echo subtract($a, $b);
echo multiply($a, $b);
echo divide($a, $b);
echo modulus($a, $b);

echo PHP_EOL;
echo PHP_EOL;

echo add(4, 'blarg');
echo subtract(4, 'blarg');
echo multiply(4, 'blarg');
echo divide(4, 'blarg');
echo modulus(4, 'blarg');

?>
