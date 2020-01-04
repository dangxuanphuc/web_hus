<?php
  include("../config.php");
  $request_id = $_GET["request_id"];
  $ability_id = $_GET["ability_id"];

  $sql = "DELETE FROM intern_organization_request_abilities
    WHERE organization_request_id = $request_id and ability_id = $ability_id";
  if(mysqli_query($conn, $sql)){
    header("location: ../../dashboard/organization.php?status=detail_request_organization&id=".$request_id);
  } else {
    header("location:../../modules/organization/show_more.php?id=".$request_id);
  }
?>
