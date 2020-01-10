<?php
  include "../config.php";
  session_start();
  $student_id = $_SESSION["student_id"];
  $name = $_POST["student_name"];
  $class = $_POST["class"];
  $birthday = $_POST["birthday"];
  $avatar = $_FILES["avatar"]["name"];
  $avatar_tmp = $_FILES["avatar"]["tmp_name"];
  move_uploaded_file($avatar_tmp, "../../public/uploads/".$avatar);

  $sql = "UPDATE `intern_students` SET `name`='$name', `date_of_birth`='$birthday', `class_name`='$class', `avatar`='$avatar' WHERE `id`=$student_id";
  if (mysqli_query($conn, $sql)) {
    header("location: ../../dashboard/student.php?status=student_profile");
  } else {
    echo("Update failed");
  }
?>
