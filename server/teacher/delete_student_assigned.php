<?php
  include("../config.php");
  $student_id = $_GET["student_id"];
  $request_id = $_GET["request_id"];

  $sql = "DELETE FROM intern_organization_request_assignment WHERE organization_request_id = $request_id AND student_id = $student_id";
  if(mysqli_query($conn, $sql)){
    $date_submit = date("y-m-d");
    $sql_student_register = "INSERT INTO intern_student_register (student_id, request_id, date_submit) VALUES ($student_id, $request_id, $date_submit)";
    if (mysqli_query($conn, $sql_student_register)) {
      header("location: ../../dashboard/teacher.php?status=list_assigned&id=".$request_id);
    } else {
      echo("Failed");
    }
  }
?>
