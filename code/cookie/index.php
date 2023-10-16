<?php

setcookie('lastName','Habib');



?>

<h1><?= $_COOKIE['lastName'] ?? 'Pas de cookie'?></h1>
<h1><?= $_COOKIE['about'] ?? 'Pas de cookie'?></h1>
<a href="about.php">go about</a>
