<?php
  include("../config.php");
  $name = $_POST["teacher_name"];
  $code = $_POST["teacher_id"];
  $gender = $_POST["gender"];
  $password = $_POST["password"];
  $image = $_FILES["teacher_avatar"]["name"];
  $image_tmp = $_FILES["teacher_avatar"]["tmp_name"];
  move_uploaded_file($image_tmp, "../public/uploads/teacher/".$image);

  $sql = "INSERT INTO intern_teachers(full_name, teacher_code, sex, avatar, 'password') VALUES('$name', '$code', '$gender', '$image', '$password')";
  if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
  } else {
    echo("Failed");
  }
?>
