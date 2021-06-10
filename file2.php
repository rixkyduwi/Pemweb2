<?php
include 'file1.php';
$data = new hitung();
$result = $data -> tambah3(100,50);
$result2 = $data -> tambah3(50,50);
$data2 = new hitung ();
$result3 = $data2 -> tambah3(2,3);
echo $result ,'<br>';
echo $result2, '<br>';
echo $result3,'<br>';
?>