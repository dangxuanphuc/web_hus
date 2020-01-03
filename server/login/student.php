<?php
  include "../config.php";
  session_start();

  if($_SERVER["REQUEST_METHOD"] == "POST") {
    $myusername = mysqli_real_escape_string($conn, $_POST["txtUsername"]);
    $pass = mysqli_real_escape_string($conn, $_POST["txtPassword"]);

    $sql = "SELECT * FROM intern_students WHERE student_code = '$myusername' and password='$pass'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);

    $count = mysqli_num_rows($result);
    if ($count > 0) {
      $_SESSION["student_name"] = $row["name"];
      $id = $row["id"];
      $_SESSION["student_id"] = $id;
      $sqlSelectStatus = "SELECT status FROM intern_organization_request_assignment WHERE student_id = $id AND status <> 2";
      $resultSatusCode = mysqli_query($conn, $sqlSelectStatus);
      $statusRegister = mysqli_fetch_array($resultSatusCode, MYSQLI_ASSOC);
      if($statusRegister["status"] == 0 || $statusRegister["status"] == 1 || $statusRegister["status"] == 2) {
        header("location: ../../dashboard/student.php?status=student_request_assigned");
      } else {
        header("location: ../../dashboard/student.php?status=list_organization_request");
      }
    } else {
      header("location: ../../public/404.php");
    }
  }
?>
