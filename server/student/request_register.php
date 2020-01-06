<?php
  include "../config.php";
  include "../function.php";
  $student_id = $_GET["student_id"];
  $request_id = $_GET["id"];
  $date = $_GET["date"];

  $sql = "INSERT INTO intern_student_register(student_id, request_id, date_submit) VALUES ($student_id, $request_id, '$date')";
  if (mysqli_query($conn, $sql)) {
    check_amount($request_id);
    header("location: ../../dashboard/student.php?status=list_request_organization");
  } else {
    echo "error";
  }
?>
