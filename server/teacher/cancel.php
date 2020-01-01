<?php
include("../config.php");
$id = $_GET["id"];
$sql = "UPDATE intern_organization_requests SET status='1000' WHERE id=$id";
if(mysqli_query($conn, $sql))
  echo "dhi";
else echo "Error deleting record: " . mysqli_error($conn);
?>
