<?php
//var_dump(__DIR__);
//var_dump(file_exists('test.txt'));
//var_dump(file_exists('dossier'));
//
//var_dump(file_exists('supper.txt'));
//var_dump(is_dir('test.txt'));
//var_dump(is_dir('dossier'));
$dossier = __DIR__."/dossier";
$filename =  $dossier."/test.txt";
//echo readfile($filename);
//require $filename;
$arr = file($filename);
//print_r($arr);
//file_put_contents($filename,'Je suis une pomme sx',FILE_APPEND);
//$txt = file_get_contents($filename);
$handle = fopen($filename, 'a+');
//fwrite($handle, 'Salama');
do {
   $fread = fread($handle,1);
   echo $fread;
}while($fread);
fclose($handle);
copy($filename,$dossier.'/copy.text');
