<?php
error_reporting (E_ALL);
ini_set("display_erors","On");
//read conf
$i=0;
$conf= array();

$dir= '/var/www/kelas4a/class/serv';
if($file = fopen($dir, "r")){
    while(!feof($file)){
        $conf[$i]= fgets($file);
        $i++;
    }
    fclose($file);
}
$db=trim($conf[0]);
$user=trim($conf[1]);
$pwd=trim($conf[2]);?>