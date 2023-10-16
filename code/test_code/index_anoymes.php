<?php

$myCallBack =  function($a,$b) {
    return  " in callback ".$a + $b;
};

function func($callback){
    return $callback(10,20);
}
$call = func($myCallBack);
//print_r($call);
$a = 50;

$call2 = func(function ($b,$c) use ($a){
   echo $b.''.$c.''.$a;
});
print_r($call2);