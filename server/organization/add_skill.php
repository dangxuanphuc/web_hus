<?php
  include "../config.php";
  $request_id = $_GET["request_id"];
  $ability_id = $_POST["ability_id"];
  $rate = $_POST["rate"];
  $note = "Lorem ipsum dolor sit amet.";

  $sql = "INSERT INTO intern_organization_request_abilities(organization_request_id, ability_id, ability_required, note) VALUES('$request_id', '$ability_id', '$rate', '$note')";
  if (mysqli_query($conn, $sql)) {
    header("location: ../../dashboard/organization.php?status=detail_request&id=".$request_id);
  } else {
    echo("Failed");
  }
?>
