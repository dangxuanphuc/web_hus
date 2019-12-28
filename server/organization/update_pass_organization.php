<?php
  include("../server/config.php");
  session_start();
  $current = $_POST["current_pwd"];
  $new_pass = $_POST["new_pass"];
  $password = $_POST["re_type"];

  $organization_id = $_SESSION["organization_id"];

  if($new_pass == $re_type){
  $sql = "UPDATE `intern_organization_profile` SET `password` = '$re_type' WHERE `password` = $current AND `id` = $organization_id";
  if(mysqli_query($conn, $sql)) {
    header("location: ../../dashboard/layout_organization.php?status=intern_organization_profile");
  } else {
    echo "Error deleting record: " . mysqli_error($conn);
  }
  mysqli_close($conn);
?>
