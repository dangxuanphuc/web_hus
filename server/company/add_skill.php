<?php
  include("../config.php");

  $id_request = $_GET["id_REQUEST"];
  $ablity_id = $_POST["ablity_id"];
  echo $ablity_id;
  $rate = $_POST["rate"];
  $note = $_POST["note"];
  echo $note;

  $sql = "INSERT INTO list_of_required_capacity_of_each_request_coupon(organization_request_id, ability_id, ability_required, note) VALUES('$id_request', '$ablity_id', '$rate', '$note')";
  if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
    header("location: ../../dashboard/layout_company.php?status=showmore&id=".$id_request);
  } else {
    echo("Failed");
  }
?>
