<?php
function fac($n): float|int
{
    echo $n .'<br>';
    if ($n <=1){
        return 1;
    }
    else{
        return  $n * fac($n-1);
    }

}

$n = 5;
$f = fac($n);

echo "la factorielle de $n est $f";