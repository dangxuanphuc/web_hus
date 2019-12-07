<?php
  include("../config.php");
  session_start();
  $ablity_id = $_POST["ablity_id"];
  $student_id = $_SESSION["student_id"];
  echo $ablity_id;
  $rate = $_POST["rate"];

  $sql = "INSERT INTO student_skill_profile(student_id, ability_id, ability_rate) VALUES('$student_id', '$ablity_id', '$rate')";
  if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
    header("location: ../layout_student.php?status=student_profile");
  }
  else {
    echo("Failed");
  }
?>
