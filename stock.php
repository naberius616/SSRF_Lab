<?php
  if(isset($_GET["data"])){
    $data = $_GET["data"];
    $content = file_get_contents($data);
    header("Content-Type: text/html");
    echo $content;

    header("HTTP/1.1 301 Moved Permanently");
    header("Location: ok.php");
  }
?>