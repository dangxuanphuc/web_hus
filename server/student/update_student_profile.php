<?php
include("../config.php");
session_start();
$name = $_POST["namesv"];

$class = $_POST["class"];
$date = $_POST["date"];

$image = $_FILES["uploadedFile"]["name"];
$image_tmp = $_FILES["uploadedFile"]["tmp_name"];

move_uploaded_file($image_tmp, "../../public/uploads/teacher/".$image);
$student_id = $_SESSION["student_id"];

$sql = "UPDATE `enterprise_profile` SET `name`="$name", `date_of_birth`="$date" , `class_name`="$class", `avatar`="$image"  WHERE `id`=$student_id";
if (mysqli_query($conn, $sql)) {
  header("location: ../../dashboard/layout_student.php?status=student_profile");
}
else {
  echo("Error");
}
?>
