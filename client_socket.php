<?php
$post = "127.0.0.3";
$port = 80;
$message = "Hello Server";
echo "messange to server ".$message;
//create socket
$socket = socket_create(AF_INET, SOCK_STREAM,0) or die("Could not create socket\n");
//connect to server
$result= socket_connect($socket, $host,$port) or die("Could not connect to server\n");
//send message to server
socket_write ($socket,$message,strlen($message)) or die("Could not send message to server\n");
//get server respond
$result = socket_read ($socket, 1024) or die("Could not read Replay from server\n");
echo "Replay from Server :".$result;
//close connection
socket_close($socket);
?>