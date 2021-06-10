<?php
include 'read.php';
try 
{
	$pdo = new PDO('mysql:host=kelas4a.lokal; dbname='.$db,$user,$pwd);
}
catch (PDOException $e) 
{
    echo 'Error: ' .$e->getMessage();
    exit();
}

?>