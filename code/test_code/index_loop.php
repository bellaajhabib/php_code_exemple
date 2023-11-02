<?php
 echo '<pre>';
 $arrCh = ["a"=>'Habib', 'b'=>'Salma'];
 $arr = ["A"=>[1,2], "B "=>[3,4]];

 foreach ( $arr as list(&$a, &$b)){
     $a++;
     $b++;
 }
$tableau = [42, 28, 35];
echo "<pre>";
foreach ($tableau as &$val) {
  $val = $val ** 2;
}
//print_r($tableau);
//echo "</pre>";
// print_r($arr);


 $tableau = [
  [100, 200, 300],
  [400, 500, 3],
  [5, 6, 10],
];

foreach ($tableau as list($a, $b)) {
 echo "$a $b  <br>";
}

