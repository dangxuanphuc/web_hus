<?php
include("../login/config.php");
$id = $_GET["id"];
$sql = "UPDATE enterprise_recruitment_request_form SET statuss='3000' WHERE id=$id";
if(mysqli_query($conn, $sql))
  echo "dhi";
else echo "Error deleting record: " . mysqli_error($conn);
?>
