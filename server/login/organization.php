<?php
  include "../config.php";
  session_start();

  if($_SERVER["REQUEST_METHOD"] == "POST") {
    $myusername = mysqli_real_escape_string($conn, $_POST["txtUsername"]);
    $pass = mysqli_real_escape_string($conn, $_POST["txtPassword"]);

    $sql = "SELECT * FROM intern_organization_profile WHERE tax_number = '$myusername' and password='$pass'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);

    $count = mysqli_num_rows($result);
    if ($count == 1) {
      $_SESSION["organization_name"]=$row["organization_name"];
      $_SESSION["organization_id"]=$row["id"];
      header("location: ../../dashboard/layout_organization.php?status=list_request_organization");
    } else {
      header("location: ../../public/404.php");
    }
  }
?>
