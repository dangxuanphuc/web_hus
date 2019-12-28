<p>Add student from list registration</p>
<?php
  include("../config.php");

  $request_id = $_GET["request_id"];
  $student_id = $_GET["id"];

  $sql = "INSERT INTO intern_organization_request_assignment(organization_request_id, student_id, start_date, end_date, status, create_date) VALUES('$request_id', '$student_id', '05-12-2019', '05-12-2020', '1', '05-12-2019')";
  if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
    delete_student_register($student_id);
  } else {
    echo("Failed");
  }

  function delete_student_register($student_id) {
    global $conn;
    global $student_id;
    global $request_id;
    $sql = "DELETE FROM intern_student_register WHERE student_id=$student_id";
    if(mysqli_query($conn, $sql)) {
      header("location: ../../dashboard/layout_teacher.php?status=list_assigned&id=".$request_id);
    } else {
      echo "Error deleting record: " ;
    }
  }
?>
