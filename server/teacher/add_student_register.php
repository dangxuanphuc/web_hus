<?php
  include "../config.php";
  $request_id = $_GET["request_id"];
  $student_id = $_GET["student_id"];
  $start_date = $_GET["start_date"];
  $end_date = $_GET["end_date"];
  $date = date("y-m-d");
  if($start_date < $end_date) {
    if($start_date >= $date) {
      $status = 0;
    } else if($start_date <= $date && $date <= $end_date) {
      $status = 1;
    } else {
      $status = 2;
    }
  }
  $sql = "INSERT INTO intern_organization_request_assignment(organization_request_id, student_id, start_date, end_date, status, create_date) VALUES('$request_id', '$student_id', '$start_date', '$end_date', '$status', '$date')";
  echo $sql;
  if (mysqli_query($conn, $sql)) {
    delete_student_register($student_id);
  } else {
    echo("Failed");
  }
  function delete_student_register($student_id) {
    global $conn;
    global $request_id;
    $sql = "DELETE FROM intern_student_register WHERE student_id = $student_id";
    if (mysqli_query($conn, $sql)) {
      header("location: ../../dashboard/teacher.php?status=list_assigned&request_id=" . $request_id);
    } else {
      echo "Error";
    }
}

?>
