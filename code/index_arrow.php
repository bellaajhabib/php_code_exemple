<?php

$test = 40;

$addition = fn($a, $b) => $a + $b + $test;

//echo $addition(2,3);
$tab = [15,25,35,45];
$coef = 4;
$tabRes = array_map(fn($e1) => $e1 * 2,$tab);

echo "<pre>";
print_r($tabRes);
echo "</pre>";
echo "<pre>";
print_r(str_repeat(times:10,string:'apple'));
echo "</pre>";
echo "<pre>";
print_r(str_repeat(string:'apple', times:10));
echo "</pre>";
echo "<pre>";
print_r(str_repeat('apple', 10));
echo "</pre>";

echo 1<<2;
