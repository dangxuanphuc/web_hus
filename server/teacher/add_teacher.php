<?php
  include("../config.php");
  $name = $_POST["teacher_name"];
  $code = $_POST["teacher_id"];
  $gender = $_POST["gender"];
  $birthday = $_POST["birthday"];
  $password = $_POST["password"];
  $image = $_FILES["teacher_avatar"]["name"];
  $image_tmp = $_FILES["teacher_avatar"]["tmp_name"];
  move_uploaded_file($image_tmp, "../../public/uploads/".$image);

  $sql = "INSERT INTO intern_teachers(name, teacher_code, sex, date_of_birth, avatar, password) VALUES('$name', '$code', '$gender', '$birthday', '$image', '$password')";
  if (mysqli_query($conn, $sql)) {
    header("location: ../../dashboard/teacher.php?status=list_teacher");
  } else {
    echo "Failed";
  }
?>
