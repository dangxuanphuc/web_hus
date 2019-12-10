<?php
  include("../config.php");
  $name = $_POST["capacity_name"];
  $type = $_POST["capacity_type"];
  $note = $_POST["capacity_note"];

  $sql = "INSERT INTO ablity_dictionary(ablity_name, ablity_type, ablity_note) VALUES('$name', '$type', '$note')";
  if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
  } else {
    echo("Failed");
  }
?>
 