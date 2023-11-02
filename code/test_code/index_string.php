<?php
require ('vendor/autoload.php');
$showString = new \App\string\ShowCharacter();
$res = $showString->getStrln();
echo '<br/>'.$res;
$i = 0;
inc($i);
echo $i;
function inc(&$args){
    $args++;

}


