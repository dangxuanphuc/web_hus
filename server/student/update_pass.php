<?php
  include("../config.php");
  session_start();
  $pass = $_POST["pass"];
  $new_pass = $_POST["new_pass"];
  $password = $_POST["password"];
  $student_id = $_SESSION["student_id"];
  if ($new_pass == $password) {
    $sql = "UPDATE `intern_students` SET `password`='$password'
      WHERE `password`=$pass AND `id`=$student_id";
    if (mysqli_query($conn, $sql)) {
      header("location: ../../dashboard/student.php?status=student_profile");
    } else {
      echo "Error deleting record: " . mysqli_error($conn);
    }
  }
  mysqli_close($conn);
?>
