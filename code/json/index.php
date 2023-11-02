<?php
$filename = "data.json";
$data = file_get_contents($filename);
try {
    $arr = ( json_decode ($data,true));
    $json = json_encode($arr);
    file_put_contents(__DIR__.'/data2.json',$json);
    echo __DIR__;
} catch (JsonException $e) {
    echo $e->getMessage();
}