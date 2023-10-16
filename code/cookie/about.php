<?php
var_dump(__DIR__.'/about.php');
setcookie('about','Je suis about', path: $_SERVER['PHP_SELF']);
?>

<h1><?= $_COOKIE['lastName'] ?? 'Pas de cookie'?></h1>
<h1><?= $_COOKIE['about'] ?? 'Pas de cookie'?></h1>
<a href="index.php">go Index</a>