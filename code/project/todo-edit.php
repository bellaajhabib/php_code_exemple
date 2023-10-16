<?php

$filename = __DIR__ . "/todo.json";
$_GET = filter_input_array(INPUT_GET, FILTER_SANITIZE_FULL_SPECIAL_CHARS);

$id = $_GET['id'] ?? '';

if ($id) {
    $data = file_get_contents($filename);
    $todos = json_decode($data, true);
    if (count($todos) > 0) {
        $ids = array_column($todos, 'id');
        $index = (int) array_search($id, $ids);
        $todos[$index]['dome'] = !$todos[$index]['dome'];
        //unset( $todos[array_keys($todos)[$index]]);
        file_put_contents($filename, json_encode($todos, JSON_PRETTY_PRINT));
    }
}

header('location: http://localhost:8099/project/');