<?php
$args = [10,20];

function fun(&$args){
    $args[0] = 100;
    return $args;
}
fun($args);
//var_dump($args);

$arr = [1,2,3,4];
echo '<per>';
unset($arr[0]);
//print_r($arr);

echo '</per>';

$arr = [1,2,3,4];
echo '<per>';
//$a = array_pop($arr);
//print_r($a);
//print_r($arr);

echo '</per>';

echo '<per>';
  list($a,,,$d) = $arr;
  //print_r($d);
//print_r($arr);

echo '</per>';

echo '<per>';
  $a = array_shift($arr) ;
 // print_r($arr);
 // print_r( $a);

echo '</per>';

echo '<per>';
//$arr = [1,2,3,4];
//  $a = array_splice($arr,0,4,5) ;
//  echo '<per>';var_dump($arr);echo '</per>';
//  echo '<br/>';
//  print_r( $a);

echo '</per>';

echo '<per>';
$tableau = [0,1,2,3];
array_splice($tableau,4,0,[5,6,7,8,9,10]);
echo "<pre>";
array_unshift($tableau,2545666);
print_r($tableau);
echo "</pre>";