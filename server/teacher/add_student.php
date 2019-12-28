<?php
  include("../config.php");
  $name = $_POST["student_name"];
  $code = $_POST["student_id"];
  $class = $_POST["class"];
  $date = $_POST["date"];
  $join_date = date("y-m-d");
  $image = $_FILES["student_avatar"]["name"];
  $image_tmp = $_FILES["student_avatar"]["tmp_name"];
  $password = $_POST["password"];
  move_uploaded_file($image_tmp, "../public/uploads/".$image);

  $sql = "INSERT INTO intern_students(student_code, name, date_of_birth, join_date, class_name, avatar, 'password) VALUES('$code', '$name', '$date', '$join_date', '$class', '$image', '$password')";
  if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
  } else {
    echo("Failed");
  }
?>
