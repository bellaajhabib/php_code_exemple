<?php
declare(strict_types=1);

function add(int | float $p1, int $p2):int | float
{

    return $p1 + $p2;
}


 echo add(2.2,2);


function greeting(? string $name): ?string
{
 return $name;
}

echo greeting("vous avez");