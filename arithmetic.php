<?php

$a = 100;
$b = 50;

function add($a, $b)
{
    echo $a + $b . PHP_EOL;
}

function subtract($a, $b)
{
    echo $a - $b . PHP_EOL;
}

function multiply($a, $b)
{
    echo $a * $b . PHP_EOL;
}

function divide($a, $b)
{
    echo $a / $b . PHP_EOL;
}

function modulus($a, $b)
{
	echo $a % $b . PHP_EOL;
}

echo add($a, $b);
echo subtract($a, $b);
echo multiply($a, $b);
echo divide($a, $b);
echo modulus($a, $b);
