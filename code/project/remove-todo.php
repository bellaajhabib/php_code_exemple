<?php
$filename = __DIR__ . "/todo.json";
$_GET = filter_input_array(INPUT_GET, FILTER_SANITIZE_NUMBER_INT);
$id = $_GET['id'] ?? '';

if($id){
    $todos = json_decode(file_get_contents($filename), true) ?? [];
    $todoIndex =  array_search($id, array_column($todos,'id'));
    array_splice($todos, $todoIndex,1);
    file_put_contents($filename,json_encode($todos,JSON_PRETTY_PRINT));
   header('location: http://localhost:8099/project/');
}