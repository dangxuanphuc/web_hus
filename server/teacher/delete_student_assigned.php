<?php
  include("../config.php");
  $student_id = $_GET["student_id"];
  $request_id = $_GET["request_id"];

  $sql = "DELETE FROM assigned_table WHERE organization_request_id=$request_id and student_id=$student_id";
  if(mysqli_query($conn, $sql)){
    $submit_date = date("y-m-d");
    $sql_student_registration = "INSERT INTO student_registration (student_id, request_id, submit_date) VALUES ($student_id, $request_id, $submit_date)";
    if (mysqli_query($conn, $sql_student_registration)) {
      header("location: ../../dashboard/layout_teacher.php?status=list_assigned&id=".$request_id);
    } else {
      echo("Failed");
    }
  } else {
    echo "Error deleting record: " ;
  }
?>
