<?php
  include "../config.php";
  session_start();

  if($_SERVER["REQUEST_METHOD"] == "POST") {
    $myusername = mysqli_real_escape_string($conn, $_POST["txtUsername"]);
    $pass = mysqli_real_escape_string($conn, $_POST["txtPassword"]);

    $sql = "SELECT * FROM intern_teachers WHERE teacher_code = '$myusername' and password='$pass'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);

    $count = mysqli_num_rows($result);
    if ($count > 0) {
      $_SESSION["teacher_name"] = $row["name"];
      $_SESSION["teacher_id"] = $row["id"];
      $_SESSION["login_user"] = $myusername;
      header("location: ../../dashboard/teacher.php?status=list_request");
    } else {
      header("location: ../../public/404.php");
    }
  }
?>
