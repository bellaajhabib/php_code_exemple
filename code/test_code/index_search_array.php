<?php
$arr = [1,2,3,4,5,6,7,8,9,10];


$arr = ['foo' => 'bar', "nom" => "Bellaaj"];
//$res = array_search("Bellaaj", $arr,true);
$arr = [  ['foo' => 'bar'], ["foo" => "Bellaaj"]];
$res = array_search('Bellaaj',array_column($arr,'foo'));

$tableau = ['first'=>1,2,3,4];
echo "<pre>";
var_dump(array_keys($tableau));
var_dump(key_exists(3, $tableau)); // bool(true)
echo "</pre>";

