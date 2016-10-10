<?php

include('server.php');

$message = $_POST['message'];
$client = stream_socket_client("tcp://127.0.0.1:8000", $errno, $errorMessage);

if($client === false){
 throw new UnexpectedValueException("Failed to connect: $errorMessage");
}

fwrite($client, $message);
fclose($client);

header("Location: http://codd.cs.gsu.edu/~rpetersen1/project2/php/chat.php");
?>