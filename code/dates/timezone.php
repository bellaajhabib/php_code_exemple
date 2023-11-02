<?php
session_start();
$json = file_get_contents('php://input');

$_POST = json_decode($json,true);

if (isset($_POST['timezone'])){
    $_SESSION['timezone'] = $_POST['timezone'];
    $_SESSION['lang'] = $_POST['lang'];
}
