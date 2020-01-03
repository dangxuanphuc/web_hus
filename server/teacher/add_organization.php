<?php
  include("../config.php");
  $name = $_POST["organization_name"];
  $code = $_POST["organization_id"];
  $employee = $_POST["employee"];
  $revenue = $_POST["revenue"];
  $address = $_POST["address"];
  $url = $_POST["url"];
  $description = $_POST["description"];
  $avatar = $_FILES["organization_avatar"]["name"];
  $avatar_tmp = $_FILES["organization_avatar"]["tmp_name"];
  $password = $_POST["password"];
  move_uploaded_file($avatar_tmp, "../public/uploads/".$avatar);

  $sql = "INSERT INTO intern_organization_profile(organization_name, employee_count, gross_revenue, address, url, tax_number, description, avatar, password) VALUES('$name', '$employee', '$revenue', '$address', '$url', '$code', '$description', '$avatar', '$password')";
  if (mysqli_query($conn, $sql)) {
    header("location: ../../dashboard/teacher.php?status=list_organization");
  } else {
    echo("Failed");
  }
?>
