<?php
  include("../config.php");
  $student_id = $_GET["student_id"];
  $request_id = $_GET["id"];
  $date = $_GET["date"];

  $sql = "INSERT INTO intern_student_register(student_id, request_id, date_submit) VALUES ($student_id, $request_id, '$date') WHERE NOT EXISTS (SELECT student_id FROM intern_student_register)";
  $result_sql = mysqli_fetch_assoc(mysqli_query($conn, $sql3));
  echo $result_sql;
  if (mysqli_query($conn, $sql)) {
    check_amount($request_id);
    header("location: ../../dashboard/student.php?status=list_organization_request");
  } else {
    echo "Bạn đã đăng ký công ty này.";
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
      $sql = "UPDATE intern_organization_requests SET status='4000' WHERE id = $request_id";
      if(mysqli_query($conn, $sql))
        echo "Done!";
    } else {
      echo "Error deleting record: ".mysqli_error($conn);
    }
  }
?>
