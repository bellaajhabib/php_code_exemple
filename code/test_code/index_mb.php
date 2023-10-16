<?php
$a= "Il fait beau en été";
echo mb_strlen($a);
echo '<br/>';
echo 'mb_strtolower ';
echo mb_strtolower($a);
echo '<br/>';
echo 'mb_strtoupper ';
echo mb_strtoupper($a);
echo '<br/>';
echo 'mb_substr:  ';
echo mb_substr($a,0,2);
echo '<br/>';
echo 'str_replace:  ';
echo str_replace("été","hiver",$a);
echo '<br/>';
echo 'explode ';
print_r(explode(" ",$a));
echo '<br/>';echo '<br/>';
$string = 'Une chaîne qui contient une Pomme et  Pome';
var_dump(str_contains(mb_strtolower($string), 'pomme')); // bool(true)
var_dump(str_contains($string, 'poire')); // bool(false)

//Reccherche si une chaîne de caractères commence par une chaîne de caractères avec str_starts_with()
echo '<br/>str_starts_with:';echo '<br/>';
$string = 'Strasbourg';
var_dump(str_starts_with($string, 'Stra')); // bool(true)
var_dump(str_starts_with($string, 'stra')); // bool(false)
// Rechercher si une chaîne de caractères finit par une chaîne de caractères avec str_end
echo '<br/> str_ends_with: ';echo '<br/>';
$string= "Tunisia";
var_dump(str_ends_with($string,"isia"));//true
var_dump(str_ends_with($string,"isi"));//false
// la fonction strrops() permet de cherhcer la position de la dernière occurrence
//d'une sous-chaîne dans une chaîne. Elle esr sensible à la casse. il est possible de passer un troisiéme
//arguement pour démarrer à partir d'un index
echo '<br/> strrpos: ';echo '<br/>';
$string = 'Une chaîne qui contient plusieurs fois pomme : Pomme, pomme et POMME';
var_dump(strrpos($string, 'pomme'));
//La fonction sttrriops permet de chercher la position de la dernière occurence
//d'une sous-chaîne dans une chaîne
echo '<br/> strripos: ';echo '<br/>';
$string = 'Une chaîne qui contient plusieurs fois pomme : Pomme, pomme et POMME ';
var_dump(strripos($string, 'pomme')); // int(64)
//La fonction strpbrk permet de chercher un ensmble de caractères dans une chaîne.
//si l'un des caractères est trouvé, elle retourne tout la châîne à partir de ce caractère, en l'incluant
