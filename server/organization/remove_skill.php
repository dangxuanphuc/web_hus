<?php
  include("../config.php");
  $request_id = $_GET["id_request"];
  $ability_id = $_GET["ability_id"];

  $sql = "DELETE FROM intern_organization_request_abilities
    WHERE organization_request_id = $request_id and ability_id = $ability_id";
  if(mysqli_query($conn, $sql)){
    header("location: ../../dashboard/organization.php?status=showmore&id=".$request_id);
  } else {
    echo "Error deleting record: ";
    header("location:../../modules/organization/show_more.php?id=".$id_request);
  }
?>
