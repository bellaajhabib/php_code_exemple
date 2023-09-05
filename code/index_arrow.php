<?php

$test = 40;

$addition = fn($a, $b) => $a + $b + $test;

echo $addition(2,3);
