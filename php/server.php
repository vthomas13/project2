<?php

//We set the chatroom back to a blank state once we close the socket
function backUpChatRoom(){

    $chatPage = fopen("chat.php", "w+");
    $baseChatPage = fopen("basechat.php", "r");

    $originalfile = fread($baseChatPage, filesize("/home/rpetersen1/public_html/project2/php/basechat.php"));
    fwrite($chatPage, $originalfile);

    fclose($chatPage);
    fclose($baseChatPage);

}

$socket = stream_socket_server("tcp://131.96.155.219:8000", $errno, $errstr);

if (!$socket) {
  echo "$errstr ($errno)<br />\n";
} else {
    $lineNumber = 25;
  while ($conn = stream_socket_accept($socket)) {
    $message = fgets($conn, 1024);
    $file = new SplFileObject("chat.php","a+" );
    $file->seek($lineNumber);
    $lineNumber++;
    echo $file->current();
    $message = "<p>" . $message. "</p>";
    $file->fwrite($message);
    $file->fwrite("\n\n");
    echo "Wrote to chat file!";
    fclose($conn);
  }

  backUpChatRoom();
  fclose($socket);
}
?>

