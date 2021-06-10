<?php 
$host ="127.0.0.3";
$port = 80;
set_time_limit(0);
$result = socket_create(AF_INET, SOCK_STREAM,0) or die("Could not create socket\n");
$result = socket_bind($socket,$host, $port) or die("Could not bind socket\n");
$result = socket_listen($socket, 3) or die("Could not set up socket listener\n");

$input = socket_accept($socket) or die("Could not accept incoming connection\n");
$input = socket_read($spwan, 1024) or die("Could not read input\n");
$input = trim($input);
echo "Client Message" .$input;
$output = strrev($input) ."\n";
$socket_write($spwan, $output, strlen($output)) or die("Could not write output\n");
$socket_close($socket);
?>

