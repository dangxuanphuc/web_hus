<?php
  include("../config.php");
  $request_id = $_GET["id"];
  $student_id = $_GET["student_id"];
  $date = $_GET["date"];

  $sql = "INSERT INTO intern_student_register (student_id, request_id, submit_date) VALUES ($student_id, $request_id, $date)";
  if (mysqli_query($conn, $sql)) {
    check_amount($request_id);
    header("location: ../../dashboard/layout_student.php?status=list_organization_request");
  } else {
    echo("Failed");
  }

  function check_amount($request_id) {
    global $conn;
    $sql_amount = mysqli_query($conn, "SELECT * FROM intern_student_register l
      WHERE l.request_id=$request_id");
    $num = mysqli_num_rows($sql_amount);

    $sql_request_amount = mysqli_query($conn, "SELECT *
      FROM intern_organization_requests l
      WHERE l.id = $request_id");
    $row = mysqli_fetch_assoc($sql_request_amount);
    $amount = $row["amount"];
    echo $num;
    echo $amount;
    if ($num >= $amount) {
      $sql = "UPDATE intern_organization_requests SET statuss='4000' WHERE id=$request_id";
      if(mysqli_query($conn, $sql))
        echo "dhi";
    } else {
      echo "Error deleting record: " . mysqli_error($conn);
    }
  }
?>
