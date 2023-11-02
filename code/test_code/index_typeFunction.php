<?php
declare(strict_types=1);

function add(int | float $p1, int $p2):int | float
{

    return $p1 + $p2;
}


//z echo add(2.2,2);


function greeting(? string $name): ?string
{
 return $name;
}

//echo greeting("vous avez");

function sumMultiples($n) {
    $sum = 0;
    $multiples = array();
    for ($i = 1; $i < $n; $i++) {
        if ($i % 3 == 0 || $i % 7 == 0) {
            if (!in_array($i, $multiples)) {
                $sum += $i;
                $multiples[] = $i;

            }
        }
    }
    return $sum;
}

$n = 11;
echo sumMultiples($n);