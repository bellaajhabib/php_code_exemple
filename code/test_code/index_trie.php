<?php
$a = [10,20,80,40];

$addition = fn ($a, $b) => ($a + $b) / 5;

$res = array_map(fn($e1) => ($e1/100) * 30 , $a);
echo "<pre>";
//print_r($res);
echo "</pre>";
echo $addition(100,200);
$tableau = ["é" => "été", "a" => "abribus", "c" => "chaud", "f" => "froid", "B" => "Bar"];
echo "<pre>";
//La fonction uasort() permet de trier un tableau en conservant
// les clés et en précisant la fonction de comparaison à utiliser pour les comparaison.
uasort($tableau, 'strcasecmp');

print_r($tableau);
echo "</pre>";