<?php
  include "../config.php";
  session_start();

  if($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = mysqli_real_escape_string($conn, $_POST["txtUsername"]);

    $sql = "SELECT * FROM intern_students WHERE student_code = '$username'";

    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $count = mysqli_num_rows($result);
    if ($count == 1) {
      $_SESSION["username"] = $_POST["txtUsername"];
      $id = $row["id"];
      $sqlSelectStatus = "SELECT status FROM intern_organization_request_assignment WHERE student_id = $id";
      $resultSatusCode = mysqli_query($conn, $sqlSelectStatus);
      $statusRegister = mysqli_fetch_array($resultSatusCode, MYSQLI_ASSOC);
      if($statusRegister["status"] == 2){
        header("location: ../../dashboard/enterprise_request.php");
      }else{
        header("location: ../../dashboard/student.php");
      }
    } else {
      header("location: ../../public/404.php");
    }
  }
?>
