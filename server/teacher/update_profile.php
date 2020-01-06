<?php
  include "../config.php";
  session_start();
  $name = $_POST["teacher_name"];
  $sex = $_POST["sex"];
  $birthday = $_POST["birthday"];
  $avatar = $_FILES["avatar"]["name"];
  $avatar_tmp = $_FILES["avatar"]["tmp_name"];
  move_uploaded_file($avatar_tmp, "../../public/uploads/".$avatar);
  $teacher_id = $_SESSION["teacher_id"];

  $sql = "UPDATE `intern_teachers` SET `name`='$name', `date_of_birth`='$birthday', `sex`='$sex', `avatar`='$avatar' WHERE `id`=$teacher_id";
  echo $sql;
  if (mysqli_query($conn, $sql)) {
    header("location: ../../dashboard/teacher.php?status=teacher_profile");
  } else {
    echo("Update failed");
  }
?>
