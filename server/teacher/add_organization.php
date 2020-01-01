<?php
  include("../config.php");
  $name = $_POST["organization_name"];
  $code = $_POST["organization_id"];
  $employee = $_POST["employee"];
  $revenue = $_POST["revenue"];
  $address = $_POST["address"];
  $home = $_POST["home"];
  $image = $_FILES["organization_avatar"]["name"];
  $image_tmp = $_FILES["organization_avatar"]["tmp_name"];
  $password = $_POST["password"];
  move_uploaded_file($image_tmp, "../public/uploads/teacher/".$image);

  $sql = "INSERT INTO intern_organization_profile(organization_name, employee_count, gross_revenue, address, home_page, tax_number, avatar, password) VALUES('$name', '$employee', '$revenue', '$address', '$home', '$code', '$image', '$password')";
  if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
  } else {
    echo("Failed");
  }
?>
