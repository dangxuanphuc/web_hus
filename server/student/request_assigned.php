<?php
include("../config.php");
session_start();
$request_id = $_GET["request_id"];
$start_date = $_POST["start_date"];
$end_date = $_POST["end_date"];
$status = $_POST["status"];
$create = date("y-m-d");
$student_id = $_SESSION["student_id"];
echo $request_id ."</br>";
echo $start_date ."</br>";
echo $end_date ."</br>";
echo $status ."</br>";
echo $create ."</br>";
echo $student_id;

$sql = "UPDATE `intern_organization_request_assignment`
  SET `start_date` = '$start_date', `end_date` = '$end_date', `status` = '$status', `create_date` = '$create'
  WHERE `intern_organization_request_assignment`.`student_id` = $student_id";

if(mysqli_query($conn, $sql))
  header("location: ../../dashboard/student.php?status=list_organization_request");
else echo "Error deleting record: " . mysqli_error($conn);

mysqli_close($conn);
?>
