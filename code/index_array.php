<?php
$a = [5=> 'foo', 'bar'=>"hello"];
$b = ["all"=> 'foo', 'bar',"hello"];
$c = ['foo', 'bar',"hello"];
$a[10]=11;
echo '<pre>';
([1,...$a]);
echo '</pre>';

function test( $name){
var_dump($name);
    return $name;
}

(test(...["Jean", "Paul", 42]));

$tableau1 = [1, 42];
$tableau2 = [58, 12];
$tableau3 = [22, ...$tableau1, 128, ...$tableau2];

$tableau1 = [0 => 100, 1 => 2000,2=>400];
$tableau2 = [0 => 1, 1 => 1, 2=>2];
echo "<pre>";
var_dump($tableau1 === $tableau2);
echo "</pre>";

echo "<pre>";
$tableau1 = [1, 2, 3];
$tableau2 = ["a" => "Jean", 22 => 4, "b" => 1];
var_dump($tableau1 + $tableau2);
echo "</pre>";