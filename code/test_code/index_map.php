<?php
$arr = [1, 2, 3, 4];
$arr2 = [10, 20, 30, 40];
$arrFilter = [10, 20, 30, 40];

$panier = [
    [
        'prix' => 50,
        'title' => "Chaussure",
    ],
    [
        'prix' => 70,
        'title' => "Chaussettes",
    ],
    [
        'prix' => 55000,
        'title' => "BMX1",
    ],
];
$arrFilteredPanier = array_filter($panier, fn($a) => $a['prix'] != 55000);
echo '<pre>';
//print_r($arrFilteredPanier);

echo '</pre>';
$arr3 = array_map(fn($a, $b) => $a * $b, $arr, $arr2);
$arrFiltered = array_filter($arrFilter, fn($a) => $a > max($arrFilter) - 1);

echo '<pre>';
//print_r($arrFiltered);

echo '</pre>';


function average(...$args)
{
    $sum = 0;
    foreach ($args as $key => $value) {
        $sum += $value;
    }
    return $sum;
}

$tableau1 = [1, 2];
$tableau2 = [3, 4];
$tableau3 = [800, 200];
$tabeauSortie = array_map("average", $tableau1, $tableau2, $tableau3);
//$tabeauSortie =average($tableau1, $tableau2, $tableau3);
echo '<pre>';
//print_r($tabeauSortie);
echo '</pre>';

$tableau = [1, 2, 3, 4, 5];
$valeur = array_reduce($tableau, fn ($acc, $el) => $acc + $el, 0);
echo "<pre>";
//print_r($valeur); // 15
echo "</pre>";

echo '<pre>';
$arrA = [1, 2, 3, 4, 5];
$arrB = [10, 20, 30, 40, 50,60,10];
$arrC = [10, 20, 30, 40, 50,60,70,80];

$valeur = array_reduce($arrB, fn ($acc, $el) => $acc + $el, 0);
    echo "<pre>";
   print_r(array_count_values($arrB));

echo "</pre>";

$re = fn($a, $b, $c) => $a + $b + $c;

$tabeauSortie1 = array_map("average1", $arrA, $arrB, $arrC);

function average1(...$args)
{
    $sum = 0;
    $sums = [] ;
    echo "<pre>";
   array_sum($args);

echo "</pre>";
    foreach ($args as $key => $value) {
        $sum += $value;
    }
    return array_sum($args);
}
echo "<pre>";
//print_r($tabeauSortie1);
echo "</pre>";