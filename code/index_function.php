<?php
 function my_min($params1,$params2,$params3,$params4): array
 {
     $b = func_get_args();
     $num = func_num_args();
      print_r($num);
     return $b;
 }
 // my_min(5,10,15,20);
 function my_max($a,...$rest)
 {
      $num = func_num_args();
      echo $num.'<br/>';
      print_r($a);
      print_r($rest);

 }
 //my_max(5,10,15,20);
$b = 10;
function func(){
    global $b;
 //$b = 30;
   //  echo $b;
}
func();
 //echo '<br/>'.$b;
//Il est possible de dire à PHP que l'on souhaite
// conserver la valeur d'une variable entre les invocations avec le mot clé static :
function functStatic(){
    static $num = 0;
    echo $num;
    $num ++;

}
functStatic();
functStatic();
functStatic();
functStatic();