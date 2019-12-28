<?php
  include("../config.php");
  $name = $_POST["capacity_name"];
  $type = $_POST["capacity_type"];
  $note = $_POST["capacity_note"];

  $sql = "INSERT INTO intern_ability_dictionary(ability_name, ability_type, ability_note) VALUES('$name', '$type', '$note')";
  if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
  } else {
    echo("Failed");
  }
?>
