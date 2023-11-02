<?php
session_start([
    'save_path' => __DIR__,
     'cookie_lifetime' => 500
        ]
);


$_SESSION['name'] = 'Habib';
session_commit();
$_SESSION['lastName'] = 'Bellaaj';
print_r($_SESSION);

?>

<h1><?= $_SESSION['name']?></h1>
<h1><?= $_SESSION['lastName']?></h1>
