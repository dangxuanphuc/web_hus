<?php
  include("../config.php");
  session_start();
  $ability_id = $_POST["ability_id"];
  $student_id = $_SESSION["student_id"];
  echo $ability_id;
  $rate = $_POST["rate"];

  $sql = "INSERT INTO intern_student_ability(student_id, ability_id, ability_rate) VALUES('$student_id', '$ability_id', '$rate')";
  if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
    header("location: ../../dashboard/layout_student.php?status=student_profile");
  }
  else {
    echo("Failed");
  }
?>
