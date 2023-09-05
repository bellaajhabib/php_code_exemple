<?php
require ('vendor/autoload.php');
$cache = new \App\Cache();

$hello = new \App\Maths();
$floor = $hello->getFloor(2.18888);
$ceil = $hello->getCeil(2.1);
$round = $hello->getRound(2.1888);
$mtSrand = $hello->getMtSrand(12345);

echo('floor '.$floor);
echo "<br/>";
echo('ceil '.$ceil);
echo "<br/>";
echo('round '.$round);
echo "<br/>";
echo 'pow 5 et 2 = '.pow(5,2);
echo "<br/>";
echo '10**2 = '.(10**2);
echo "<br/>";
echo mt_rand(1000, mt_getrandmax());
