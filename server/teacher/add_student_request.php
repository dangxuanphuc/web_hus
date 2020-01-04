<?php
  include("../config.php");
  $request_id = $_GET["request_id"];
  $student_id = $_GET["student_id"];
  $sql = "INSERT INTO intern_organization_request_assignment(organization_request_id, student_id, start_date, end_date,status, create_date) VALUES('$request_id', '$student_id', '05-12-2019', '05-12-2020', '1', '05-12-2019')";
  if (mysqli_query($conn, $sql)) {
    echo "success";
  } else {
    echo("Failed");
  }
?>
