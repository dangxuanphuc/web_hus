<?php
  include "../server/config.php";
  session_start();
  $organization_id = $_SESSION["organization_id"];
  $current = $_POST["current_pass"];
  $new_pass = $_POST["new_pass"];
  $re_type = $_POST["re_type"];
  if($new_pass == $re_type){
  $sql = "UPDATE `intern_organization_profile` SET `password` = '$re_type' WHERE `password` = $current AND `id` = $organization_id";
  if(mysqli_query($conn, $sql)) {
    header("location: ../../dashboard/organization.php?status=organization_profile");
  } else {
    echo "Error deleting record: " . mysqli_error($conn);
  }
  mysqli_close($conn);
?>
