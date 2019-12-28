<?php
  include("../config.php");

  $id_request = $_GET["id_REQUEST"];
  $ability_id = $_POST["ability_id"];
  echo $ability_id;
  $rate = $_POST["rate"];
  $note = $_POST["note"];
  echo $note;

  $sql = "INSERT INTO intern_organization_request_abilities(organization_request_id, ability_id, ability_required, note) VALUES('$id_request', '$ability_id', '$rate', '$note')";
  if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
    header("location: ../../dashboard/layout_organization.php?status=showmore&id=".$id_request);
  } else {
    echo("Failed");
  }
?>
