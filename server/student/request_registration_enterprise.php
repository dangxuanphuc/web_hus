<?php
// xu li dang ki phieu yc cho Student
include("../config.php");
$request_id = $_GET["id"];
$student_id = $_GET["student_id"];
$date = $_GET["date"];

$sql = "INSERT INTO student_registration (student_id, request_id, submit_date) VALUES ($student_id, $request_id, $date)";
if (mysqli_query($conn, $sql)) {
  check_amount($request_id);
  header("location: ../layout_student.php?status=list_enterprise_request");
}
else {
  echo("Fail");
}

// Check amount
function check_amount($request_id){
  global $conn;
  // get amount of student register
  $sql_amount = mysqli_query($conn, "SELECT * FROM student_registration l
    WHERE l.request_id=$request_id");
  $num = mysqli_num_rows($sql_amount);

  // get amount student request
  $sql_request_amount = mysqli_query($conn, "SELECT *
    FROM enterprise_recruitment_request_form  l
    WHERE l.id=$request_id");
  $row = mysqli_fetch_assoc($sql_request_amount);
  $sl = $row["amount"];
  echo $num;
  echo $sl;
  if ($num >= $sl) {
    $sql = "UPDATE enterprise_recruitment_request_form SET statuss='4000' WHERE id=$request_id";
    if(mysqli_query($conn, $sql))
    echo "dhi";
  } else {
    echo "Error deleting record: " . mysqli_error($conn);
  }
}
?>
