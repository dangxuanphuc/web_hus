<?php
  include("../config.php");
  $name = $_POST["company_name"];
  $code = $_POST["company_id"];
  $employee = $_POST["employee"];
  $revenue = $_POST["revenue"];
  $address = $_POST["address"];
  $home = $_POST["home"];
  $image = $_FILES["company_avatar"]["name"];
  $image_tmp = $_FILES["company_avatar"]["tmp_name"];
  $password = $_POST["Password"];
  move_uploaded_file($image_tmp, "../public/uploads/teacher/".$image);

  $sql = "INSERT INTO enterprise_profile(organization_name, employee_count, gross_revenue, address, home_page, tax_number, avatar, 'password') VALUES('$name', '$employee', '$revenue', '$address', '$home', '$code', '$image', '$password')";
  if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
  } else {
    echo("Failed");
  }
?>
