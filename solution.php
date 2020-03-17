<?php

use src\calc;
use src\calc2;

$calc = new calc();
$calc2 = new calc2();

$ergebnis1 = $calc->addition();
$ergebnis2 = $calc2->multiplication();

echo $ergebnis1;
echo $ergebnis2;

