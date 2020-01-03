<?php
  include("../config.php");
  session_start();
  $organization_id = $_SESSION["organization_id"];
  $name = $_POST["organization_name"];
  $employee = $_POST["employee"];
  $revenue = $_POST["revenue"];
  $address = $_POST["address"];
  $url = $_POST["url"];
  $avatar = $_FILES["organization_avatar"]["name"];
  $avatar_tmp = $_FILES["organization_avatar"]["tmp_name"];
  move_uploaded_file($avatar_tmp, "../public/uploads/".$avatar);

  $sql = "UPDATE `intern_organization_profile` SET   `organization_name`='$name', `employee_count`='$employee', `gross_revenue`='$revenue', `address`='$address', `url`='$url', `avatar`='$avatar' WHERE `id`= $organization_id";
  if (mysqli_query($conn, $sql)) {
    header("location: ../../dashboard/organization.php?status=organization_profile");
  } else {
    echo("Failed");
  }
?>
