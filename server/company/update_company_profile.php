<?php
  include("../config.php");
  session_start();
  $organization_id = $_SESSION["organization_id"];
  $name = $_POST["company_name"];
  $empl = $_POST["empl"];
  $revenue = $_POST["revenue"];
  $address = $_POST["address"];
  $home = $_POST["home"];
  $image = $_FILES["company_avatar"]["name"];
  $image_tmp = $_FILES["company_avatar"]["tmp_name"];
  move_uploaded_file($image_tmp, "../public/uploads/teacher/".$image);

  $sql = "UPDATE `company_profile` SET   `organization_name`='$name', `employee_count`='$empl', `gross_revenue`='$revenue', `address`='$address', home_page='$home', avatar='$image' WHERE `id`= $organization_id";
  if (mysqli_query($conn, $sql)) {
    header("location: ../../dashboard/layout_company.php?status=company_profile");
  } else {
    echo("Failed");
  }
?>
