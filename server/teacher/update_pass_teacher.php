<?php
  include("../config.php");
  session_start();
  $pass = $_POST["pass"];
  $new_pass = $_POST["new_pass"];
  $password = $_POST["password"];
  $teacher_id = $_SESSION["id_teacher"];

  if($new_pass == $password) {
    $sql = "UPDATE `intern_teachers` SET `password` = '$password'  WHERE  `password` = $pass AND `id` = $teacher_id";
    if(mysqli_query($conn, $sql))
      header("location:../../dashboard/teacher.php?status=list_request_confirm");
    else echo "Error deleting record: " . mysqli_error($conn);
  }
  mysqli_close($conn);
?>
