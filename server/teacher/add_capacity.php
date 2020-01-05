<?php
  include("../config.php");
  $name = $_POST["capacity_name"];
  $type = $_POST["capacity_type"];
  $note = $_POST["capacity_note"];

  $sql = "INSERT INTO intern_ability_dictionary(ability_name, ability_type, ability_note) VALUES('$name', '$type', '$note') WHERE NOT EXISTS (SELECT ability_name FROM intern_ability_dictionary)";
  if (mysqli_query($conn, $sql)) {
    header("location: ../../dashboard/teacher.php?status=list_request_organization");
  } else {
  echo("Năng lực này đã tồn tại.");
  }
?>
