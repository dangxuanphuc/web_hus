<?php
  include "../config.php";
  session_start();

  if($_SERVER["REQUEST_METHOD"] == "POST") {
    $myusername = mysqli_real_escape_string($conn, $_POST["txtUsername"]);

    $sql = "SELECT teacher_code FROM intern_teachers WHERE teacher_code = '$myusername'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

    $count = mysqli_num_rows($result);
    if ($count == 1) {
      $_SESSION["login_user"] = $myusername;
      header("location: ../../dashboard/teacher.php");
    } else {
      header("location: ../../public/404.php");
    }
  }
?>
