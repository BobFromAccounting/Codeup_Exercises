<?php

function add($a, $b)
{
    echo $a + $b;
}

function subtract($a, $b)
{
    echo $a - $b;
}

function multiply($a, $b)
{
    echo $a * $b;
}

function divide($a, $b)
{
    echo $a / $b;
}

$a = 100;
$b = 50;

echo add($a, $b);
echo subtract($a, $b);
echo multiply($a, $b);
echo divide($a, $b);
