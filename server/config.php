<?php
  $host = "localhost";
  $user = "root";
  $psw = "";
  $db = "web_hus";

  $conn = new mysqli($host, $user, $psw, $db);

  if($conn -> connect_error) {
    echo "Connection fail " . $conn -> connect_error;
  }
?>
